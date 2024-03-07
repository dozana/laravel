@extends('admin.layouts.app')

@section('content')
    <h5 class="mb-4">ყველა წიგნი</h5>

    @include('admin.books.search')

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>ბარკოდი</th>
                <th>უნიკალური კოდი</th>
                <th>სათაური</th>
                <th>ავტორი</th>
                <th>აქტივობის თარიღი</th>
                <th>კოლექცია</th>
                <th>კატეგორია</th>
                <th>მასალა</th>
                <th class="text-center">მოქმედება</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->barcode }}</td>
                    <td>{{ $book->call_number }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->activity_date }}</td>
                    <td>{{ $book->collection }}</td>
                    <td>{{ $book->category_id }}</td>
                    <td>{{ $book->material }}</td>
                    <td class="text-center">
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-primary btn-sm mb-2 d-block">რედაქტირება</a>
                        <form id="delete-form-{{ $book->id }}" action="{{ route('books.destroy', $book) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm delete-btn d-block">წაშლა</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('books.create') }}" class="btn btn-success btn-sm mb-2">დამატება</a>

    @include('admin.partials.messages')

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const form = this.parentElement;

                    Swal.fire({
                        title: 'დარწმუნებული ხარ?',
                        text: 'წაშალება შესაძლებელია!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'დიახ',
                        cancelButtonText: 'არა'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
