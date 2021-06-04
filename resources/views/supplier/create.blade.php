@extends('layouts.all')

@section('content')
<div class="media-body">
        <div class="module">
            <div class="module-head">
            Insert Supplier
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
        <form method="post" action="{{ route('supplier.store') }}" id="myForm">
        @csrf
        <div class="module-body">
            <div class="form-group">
                <label for="nama_perusahaan">Nama Perusahaan</label>
                <input type="text" name="nama_perusahaan" class="form-control" id="nama_perusahaan" aria-describedby="nama_perusahaan" placeholder="Nama Perusahaan">
            </div>
            <div class="form-group">
                <label for="no_phone">Handphone</label>
                <input type="text" name="no_phone" class="form-control" id="no_phone" aria-describedby="no_phone" placeholder="Nomor Handphone">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="alamat" placeholder="Alamat">
            </div>
            <div class="form-group">
                <label for="kota">Kota</label>
                <input type="text" name="kota" class="form-control" id="kota" aria-describedby="kota" placeholder="Kota">
            </div>
            <div class="form-group">
                <label for="provinsi">Provinsi</label>
                <input type="text" name="provinsi" class="form-control" id="provinsi" aria-describedby="provinsi" placeholder="Provinsi">
            </div>
            <div class="form-group">
                <label for="negara">Negara</label>
                <input type="text" name="negara" class="form-control" id="negara" aria-describedby="negara" placeholder="Negara">
            </div>
            <div class="form-group">
                <label for="kode_pos">Kode Pos</label>
                <input type="text" name="kode_pos" class="form-control" id="kode_pos" aria-describedby="kode_pos" placeholder="Kode Pos">
            </div>
            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" name="fax" class="form-control" id="fax" aria-describedby="fax" placeholder="Fax">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('supplier.index') }}" class="btn btn-default">Cancel</a>
        </form>
        </div>
    </div>
    </div>
</div>
@endsection