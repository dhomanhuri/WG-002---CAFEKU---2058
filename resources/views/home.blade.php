@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ url('/order') }}" method="GET">
                        <div class="mb-3">
                            <label class="form-label">nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">jumlah pesanana</label>
                            <input type="text" class="form-control" name="jumlah">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">total</label>
                            <input type="text" class="form-control" name="total">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">status</label>
                            <select class="form-select" name="status" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="member">member</option>
                                <option value="non-member">non-member</option>
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
