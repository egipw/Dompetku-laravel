@extends('layouts.master')


@section('content')

<div id="content">
    <div class="col-md-12 col-sm-12 col-xs-12" style="padding:20px;">
                    
        <div class="panel">
            <div class="panel-heading"><h3>Dompet</h3></div>
        <div class="panel-body">

<input type="button" class=" btn btn-raised btn-primary" value="Tambah Data"/>

<br><br>

<div class="responsive-table">
    <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nominal</th>
                <th>Keterangan</th>
                <th>Watu</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
@php
$i = 0
@endphp
        @foreach($dompet as $data)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $data -> nama }}</td>
                <td>Rp. {{ $data -> nominal }} ,-</td>
                <td>{{ $data -> keterangan }}</td>
                <td>{{ $data -> tgl }}</td>
                <td>
                    <a href="{{ $data -> id}} {{ $data -> nama }}"><input type="button" class="btn btn-success" value="Update"/>
                    <input type="button" class="btn btn-danger" value="delete"/>
                </td>
            </tr>
            @endforeach
        </tbody>    
    </table>
</div>

</div>
</div>

@endsection

