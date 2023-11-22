<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h1>Daftar Product</h1>
            </div>
            <div class="navbar-nav">
                <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('home')}}'">Kembali</button>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Jumlah</th>
                    <th>Price</th>
                    <th>Gambar</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->jumlah }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>  
                            <img src="{{ asset('storage/images/'.$product->image) }}" alt="Product Image" style="max-width: 300px; max-height: 300px;">
                        </td>
                        <td>
                        <button class="btn btn-primary" type="button" onclick="window.location.href='{{ route('home')}}'">buy</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
