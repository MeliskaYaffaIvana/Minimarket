@extends('item.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit  Data
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
            <form method="post" action="{{ route('item.update', $item->id) }}" encytype="multipart/form-data"id="myForm">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="nama_item">Nama item</label>
                <input type="text" name="nama_item" class="form-control" id="nama_item" value="{{ $item->nama_item }}" aria-describedby="nama_item" >
            </div>
            <div class="form-group">
                <label for="merk_item">Merk item</label>
                <input type="text" name="merk_item" class="form-control" id="merk_item" value="{{ $item->merk_item }}" aria-describedby="merk_item" >
            </div>
            <label for="kategori">Kategori</label>
            <select name="kategori" class="form-control">
                @foreach($kategori as $ktg)
                    <option value="{{$ktg->id}}" {{ $item->kategori_id == $ktg->id ? 'selected' : ''}}>{{$ktg->nama_kategori}}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="harga_jual">Harga Jual</label>
                <input type="text" name="harga_jual" class="form-control" id="harga_jual" value="{{ $item->harga_jual }}" aria-describedby="harga_jual" >
            </div>
            <div class="form-group">
                <label for="satuan">Satuan</label>
                <input type="text" name="satuan" class="form-control" id="satuan" value="{{ $item->satuan }}" aria-describedby="satuan" >
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="text" name="stock" class="form-control" id="stock" value="{{ $item->stock }}" aria-describedby="stock" >
            </div>
            <div class="form-group">
                    <label for="image">Image: </label>
                    <input type="file" class="form-control" required="required" name="image" id="image" value="{{ $item->item_image}}"></br>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form> 
            </div>
        </div>
    </div>
</div>
@endsection