@extends('admin.layouts.app')

@section('content')
    <h5 class="mb-4">კატეგორიის დამატება</h5>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">სახელი</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary btn-sm">დამატება</button>
            <a href="{{ route('categories.index') }}" class="btn btn-link btn-sm">უკან დაბრუნება</a>
        </div>
    </form>

    @include('admin.partials.messages')

@endsection
