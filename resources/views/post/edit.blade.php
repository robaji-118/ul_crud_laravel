@extends('main.main')
@section('title','create')
@section('content')

    <div class="">
        <h1 class="text-center">Edit</h1>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                <p>{{ session('success') }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class=" alert alert-danger alert-dismissible fade show">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="{{ url('products', $products->id ) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="exampleInputtitle1" class="form-label">nama</label>
                <input type="text" name="name" value="{{ $products->name }}" class="form-control" id="exampleInputtitle1">
            </div>
            <div class="mb-3">
                <label for="exampleInputtitle1" class="form-label">stock</label>
                <input type="number" name="stock" value="{{ $products->stock }}" class="form-control" id="exampleInputtitle1">
            </div>
            <div class="mb-3">
                <label for="exampleInputBody1" class="form-label">Harga</label>
                <input type="number" name="price" value="{{ $products->price }}" class="form-control" id="exampleInputBody1">
            </div>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
