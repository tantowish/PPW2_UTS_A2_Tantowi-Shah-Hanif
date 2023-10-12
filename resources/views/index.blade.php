@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No Punggung</th>
                <th scope="col">Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemain as $pemain)
            <tr>
                <th scope="row">{{ $pemain->id }}</th>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
       
@endsection