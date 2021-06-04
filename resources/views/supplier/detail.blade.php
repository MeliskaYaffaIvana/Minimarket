@extends('layouts.all')

@section('content')

<div class="media-body">
        <div class="module">
            <div class="module-head">
            Supplier Detail
            </div>
            <div class="card-body">
            <div class="module-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-supplier"><b>No : </b>{{$supplier->id}}</li></p>
                    <li class="list-group-supplier"><b>Perusahaan : </b>{{$supplier->nama_perusahaan}}</li></p>
                    <li class="list-group-supplier"><b>Handphone : </b>{{$supplier->no_phone}}</li></p>
                    <li class="list-group-supplier"><b>Alamat : </b>{{$supplier->alamat}}</li></p>
                    <li class="list-group-supplier"><b>Kota : </b>{{$supplier->kota}}</li></p>
                    <li class="list-group-supplier"><b>Provinsi : </b>{{$supplier->provinsi}}</li></p>
                    <li class="list-group-supplier"><b>Negara : </b>{{$supplier->negara}}</li></p>
                    <li class="list-group-supplier"><b>Kode Pos: </b>{{$supplier->kode_pos}}</li></p>
                    <li class="list-group-supplier"><b>Fax : </b>{{$supplier->fax}}</li></p>
                    <li class="list-group-supplier"><b>Email : </b>{{$supplier->emailk}}</li></p>
                </ul>
                <a class="btn btn-success mt-3" href="{{ route('supplier.index') }}">Back</a>
            </div>
            
        </div>
    </div>
</div>
@endsection