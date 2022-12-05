@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 text-center">
            <div class="card">
                <div class="card-header">{{ __('Add') }}</div>

                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">email</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">role</label>
                            <select class="form-select" name="role">
                                <option selected>Open this select menu</option>
                                <option value="owner">owner</option>
                                <option value="admin">admin</option>
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
