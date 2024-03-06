@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h3 class="mb-3">Create Category</h3>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
@endsection
