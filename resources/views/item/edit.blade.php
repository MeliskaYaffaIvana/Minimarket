@extends('layouts.app')

@section('content')

<div class="media-body">
        <div class="module">
            <div class="module-head">
            Edit  Data
            </div>
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
            <form method="post" action="{{ route('item.update', $item->id) }}" enctype="multipart/form-data"id="myForm">
            @method('PUT')
            @csrf
            <div class="module-body">
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
                    <label for="item_image">Image: </label>
                    <input type="file" class="form-control" required="required" name="item_image" id="item_image" value="{{ $item->item_image}}"></br>
                    <img width="150px" src="{{asset('storage/'.$item->item_image)}}">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-default">Cancel</a>
            </form> 
            </div>
        </div>
    </div>
</div>
@endsection