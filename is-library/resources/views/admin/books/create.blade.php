@extends('admin.layouts.app')

@section('content')
    <h5 class="mb-4">წიგნის დამატება</h5>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="barcode" class="form-label">ბარკოდი</label>
            <input type="text" class="form-control" id="barcode" name="barcode" value="{{ old('barcode') }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">სათაური</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">ავტორი</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
        </div>
        <div class="mb-3">
            <label for="act_data" class="form-label">თარიღი</label>
            <input type="date" class="form-control" id="act_data" name="act_data" value="{{ old('act_data') }}">
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">კატეგორია</label>
            <select name="category_id" id="category_id" class="form-select">
                <option selected disabled>- აირჩიეთ კატეგორია -</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="material" class="form-label">მასალა</label>
            <select name="material" id="material" class="form-select">
                <option value="">მასალა</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary btn-sm">დამატება</button>
            <a href="{{ route('books.index') }}" class="btn btn-link btn-sm">უკან დაბრუნება</a>
        </div>
    </form>

    @include('admin.partials.messages')

@endsection
