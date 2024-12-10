@extends('main.main')
@section('title', 'create')
@section('content')

    <div class="wrapper container">
         @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        <h1 class="text-center"> Semua Pesanan</h1>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col1">Nama</th>
                    <th scope="col1">Stock</th>
                    <th scope="col1">Harga</th>
                    <th scope="col1" colspan="2" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td style="width: 200px">{{ $product->name }}</td>
                        <td style="width: 200px">{{ $product->stock }}</td>
                        <td style="width: 500px">{{ $product->price }}</td>

                        <td style="width: 100px"><a href="{{ route('products.edit', $product->id) }}"><button
                                    class="btn btn-success">Edit</button></a></td>

                        <form method="POST" action="{{ url('products', $product->id) }}">

                            @csrf
                            @method ('DELETE')
                            <td style="width: 100px"><button class="btn btn-danger">Hapus</button></td>

                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


@endsection
