@extends('layouts.app')

@section('content')

<div class="media-body">
        <div class="module">
            <div class="module-head">
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
            <form method="post" action="{{ route('kategori.update', $kategori->id) }}" id="myForm">
            @method('PUT')
            @csrf
            <div class="module-body">
                <div class="form-group">
                    <label for="nama_kategori">Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" id="nama_kategori" value="{{ $kategori->nama_kategori }}" ariadescribedby="nama_kategori" >
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('kategori.index') }}" class="btn btn-default">Cancel</a>
            </form> 
            </div>
        </div>
    </div>
</div>
@endsection