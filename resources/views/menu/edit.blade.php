@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 text-center">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                    <form action="{{ route('menu.update', $menu->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">nama</label>
                            <input type="text" value="{{ $menu->nama }}" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">harga</label>
                            <input type="number" class="form-control" value="{{ $menu->harga }}" name="harga">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">keterangan</label>
                            <input type="text" class="form-control" name="keterangan" value="{{ $menu->keterangan }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">kategori</label>
                            <select class="form-select" name="kategori_id" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
