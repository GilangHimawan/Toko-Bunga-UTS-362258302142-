<!DOCTYPE html>
<html>
<head>
    <title>Toko Bunga</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Toko Bunga</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                    @endguest
                </ul>
            </div>
            <div class="navbar-nav">
                <button class="btn btn-primary" type="button" onclick=window.location.href="{{ route('products.buy') }}">Beli Barang</button>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Welcome to Toko Bunga Bu Santi!</h1>
        <h6>Kami Menyediakan berbagai macam bunga dan tanaman hias yang berbagai macam.</h2>
        <h6>Alamat : jl Raya Kenanga no.32, Jambewangi, Kabupaten Tunas Sakti.</h2>
        <!-- Add more content here -->
    </div>
</body>
</html>