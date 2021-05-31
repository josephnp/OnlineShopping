@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <h1>Katalog Barang</h1><br>
<div class="card">
<div class="card-body">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Kategori</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Gambar</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <th>{{$loop->iteration}}</th>
                <td>{{$product->category->name}}</td>
                <td>{{$product->nama}}</td>
                <td>Rp. {{$product->harga}}</td>
                <td>{{$product->jumlah}}</td>
                <td><img src="{{asset('storage/images/' . $product->image)}}" width="50" height="50" alt=""></td>
                <td>
                    <a class="btn btn-primary" href="/add/{{$product->id}}">Add to Cart</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-success mt-3" href="/checkout">Check out</a>
</div>
</div>
</div>
@endsection
