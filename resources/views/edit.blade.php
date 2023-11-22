<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Menggunakan 'judul' sebagai nama input -->
                            <div class="form-group">
                                <label class="font-weight-bold">Nama Bunga</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $product->nama) }}" placeholder="Nama Bunga">
                                <!-- error message untuk 'nama' -->
                                @error('nim')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Stock Bunga</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="jumlah" value="{{ old('jumlah', $product->jumlah) }}" placeholder="Stock Bunga">
                                <!-- error message untuk 'nama' -->
                                @error('jumlah')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Menggunakan 'pengarang' sebagai nama input -->
                            <div class="form-group">
                                <label class="font-weight-bold">Harga Product </label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="harga" value="{{ old('harga', $product->harga) }}" placeholder="Harga">
                                <!-- error message untuk 'pengarang' -->
                                @error('kode')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Menggunakan 'penerbit' sebagai nama input -->
                            <div class="form-group">
                                <label for="gambar" class="font-weight-bold">Gambar Bunga</label>
                                <input type="file" id="image" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ old('image', $product->image) }}" placeholder="Gambar" accept="image/*">
                                <!-- error message untuk gambar -->
                                @error('gambar')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
</body>
</html>

