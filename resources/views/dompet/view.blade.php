@extends('layouts.master')

@section('title')
Data {{ $dompet -> nama }}
@endsection



@section('content')

<a href="dompet"> <input type="button" class=" btn btn-raised btn-primary" value="Kembali"/>

<br><hr>

<div class="col-md-4">
    <div class="alert alert-primary col-md-9 col-sm-9 alert-icon alert-dismissible fade in" role="alert">
        <div class="col-md-3 col-sm-3 icon-wrapper text-center">
            <span class="fa fa-star fa-2x"></span>
        </div>
        <div class="col-md-8 col-sm-8">
            <p>
                <strong>{{ $dompet -> nama }}</strong><br>
                <strong>Rp. {{ $dompet -> nominal }} ,-</strong><br>
            </p>
        </div>
    </div>
</div>

<p>
    <strong>Jenis      : {{ $dompet -> nama }}</strong><br>
    <strong>Nominal    : {{ $dompet -> nominal }}</strong><br>
    <strong>Tanggal    : {{ $dompet -> tgl }}</strong><br>
    <strong>Keterangan : {{ $dompet -> keterangan }}</strong><br>
</p>

@endsection