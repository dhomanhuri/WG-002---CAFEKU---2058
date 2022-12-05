@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('menu') }}</div>
                <div class="card-body">
                    <a href="{{ route('menu.create') }}" class="btn btn-primary">Add</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Menu</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Handle</th>
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
                                    <td>
                                        <a href="{{ route('menu.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                        <a href="{{ url('menudel/'.$item->id) }}" class="btn btn-danger">Delete</a>
                                    </td>
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
