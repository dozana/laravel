@extends('admin.layouts.app')

@section('content')
    <h5 class="mb-4">ყველა კატეგორია</h5>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>სახელი</th>
                <th class="text-center">მოქმედება</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td class="align-middle col-9">{{ $category->name }}</td>
                    <td class="align-middle text-center col-3">
                        <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary btn-sm me-2 d-inline">რედაქტირება</a>
                        <form id="delete-form-{{ $category->id }}" action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm delete-btn">წაშლა</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm mb-3">დამატება</a>

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
