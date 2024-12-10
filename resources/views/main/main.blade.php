<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>

    <div class="container tampilan ">
        <div class="row border p-5">
            <div class="col-md-6 text-center pilihan  ">

                <h3 class="text-center mb-5 ">Menu </h3>
                <div class="pilihan1">
                    <a href="{{ url('products/create') }}"><button class="btn btn-dark"> Pemesanan Produk </button></a>

                    <a href="{{ url('products') }}"><button class="btn btn-dark"> Produk pesanan </button></a>
                </div>
            </div>
            <div class="col-md-6 ">
                @yield('content')
            </div>
        </div>

    </div>

</body>

</html>
