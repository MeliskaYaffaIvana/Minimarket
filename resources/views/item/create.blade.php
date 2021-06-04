@extends('layouts.all')

@section('content')
<div class="media-body">
        <div class="module">
            <div class="module-head">
            Insert item
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('item.store') }}" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="module-body">
            <div class="form-group">
                <label for="nama_item">Nama Item</label>
                <input type="text" name="nama_item" class="form-control" id="nama_item" aria-describedby="nama_item" placeholder="Nama Item">
            </div>
            <div class="form-group">
                <label for="merk_item">Merk Item</label>
                <input type="text" name="merk_item" class="form-control" id="merk_item" aria-describedby="merk_item" placeholder="Merk" >
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select name="kategori" class="form-control">
                 @foreach($kategori as $ktg)
                    <option value="{{$ktg->id}}">{{$ktg->nama_kategori}}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="harga_jual">Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" id="harga_jual" aria-describedby="harga_jual" placeholder="Harga">
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" name="satuan" class="form-control" id="satuan" aria-describedby="satuan" placeholder="Satuan">
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" class="form-control" id="stock" aria-describedby="stock" placeholder="Stock">
            </div>
            <div class="form-group">
                    <label for="item_image">Image: </label>
                    <input type="file" class="form-control" required="required" name="item_image" id="item_image"></br>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('item.index') }}" class="btn btn-default">Cancel</a>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection