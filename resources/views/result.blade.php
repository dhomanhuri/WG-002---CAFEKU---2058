@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Order') }}</div>

                <div class="card-body">
                    <form action="{{ url('/order') }}" method="GET">
                        <div class="mb-3">
                            <label class="form-label">nama</label>
                            <input type="text" class="form-control" name="nama" value="{{ $data['nama'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">jumlah pesanan</label>
                            <input type="text" class="form-control" name="jumlah" value="{{ $data['jumlah'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">total</label>
                            <input type="text" class="form-control" name="total" value="{{ $data['total'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">status</label>
                            <input type="text" class="form-control" name="status" value="{{ $data['status'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">diskon</label>
                            <input type="text" class="form-control" name="diskon" value="{{ $data['diskon'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">total</label>
                            <input type="text" class="form-control" name="total" value="{{ $data['total'] }}" disabled>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
