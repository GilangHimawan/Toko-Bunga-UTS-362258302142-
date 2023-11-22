<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Controllers\CostomAuthController;

class productB extends Controller
{

    public function index()
{
    $products = Product::all(); // Assuming your Product model is correctly imported

    return view('product', compact('products'));
}
public function index1()
{
    $products = Product::all(); // Assuming your Product model is correctly imported

    return view('buy', compact('products'));
}

    public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'jumlah' => 'required|numeric',
        'harga' => 'required|numeric',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Handling image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time().$image->getClientOriginalName();
        $image->storeAs('public/images', $imageName);
    }

    // Creating a new product instance
    $product = new Product([
        'nama' => $request->get('nama'),
        'jumlah' => $request->get('jumlah'),
        'harga' => $request->get('harga'),
        'image' => $imageName ?? null,
    ]);

    // Save the product to the database
    $product->save();

    return redirect()->route('products.store')->with('success', 'Product created successfully');
}
public function create()
{
    return view('create');
}

public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('edit', compact('product'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);
            $product->image = $imageName;
        }

        $product->nama = $request->get('nama');
        $product->jumlah = $request->get('jumlah');
        $product->harga = $request->get('harga');
        $product->save(); // Save other changes except the image if not uploaded

        return redirect()->route('products.store')->with('success', 'Product updated successfully');
    }
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete();

    return redirect()->route('products.store')->with('success', 'Product deleted successfully');
}
public function minQuantity($id)
{
    $product = Product::findOrFail($id);

    if ($product->jumlah > 0) {
        $product->jumlah = -1;
        $product->save();

        return response()->json(['jumlah' => $product->jumlah]);
    }

    return response()->json(['error' => 'Stok telah habis'], 400);
}

}
