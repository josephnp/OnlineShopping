<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Penambahan Barang</title>
  </head>
  <body>
  <br></br>
  <div class="container">
  <div class="card">
  <div class="card-body">
    <h1>Menambahkan Barang</h1><hr>
    <form action="/stores" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="category">Kategori Barang</label>
            <select name="category_id" class="form-control" id="">
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="text" minlength="5" maxlength="80" name="nama" class="form-control" id="nama" placeholder="Nama barang (5-80 huruf)">
        </div>
        <div class="form-group">
            <label for="harga">Harga Barang</label>
            <input type="number" min="0" name="harga" class="form-control" id="harga" placeholder="Harga barang">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah Barang</label>
            <input type="number" min="0" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah barang">
        </div>
        <div class="form-group">
            <label for="image">Gambar Barang</label><br>
            <input type="file" name="image" id="image">
        </div>
        <a href="/" class="btn btn-danger">Kembali</a>
        <button class="btn btn-success">Tambah</button>
    </form>
  </div>
  </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>