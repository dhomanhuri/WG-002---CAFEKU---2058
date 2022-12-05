@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Beranda') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Menu</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $item->nama }}</td>
                                    <td><img src="{{ asset('storage/'.$item->foto) }}" width="70px" alt=""></td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->keterangan }}</td>
                                    <td>{{ $item->kategori->nama_kategori }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
