<table class="table table-bordered table-hover">
    <thead>
        <tr class="table-primary">
            <th colspan="2">კატეგორიების მართვა</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="{{ route('categories.index') }}">{{ __('ყველა კატეგორია') }}</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('categories.create') }}">{{ __('კატეგორიის დამატება') }}</a></td>
        </tr>
    </tbody>
</table>

<table class="table table-bordered table-hover">
    <thead>
        <tr class="table-primary">
            <th colspan="2">წიგნების მართვა</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="{{ route('books.index') }}">{{ __('ყველა წიგნი') }}</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('books.create') }}">{{ __('წიგნის დამატება') }}</a></td>
        </tr>
    </tbody>
</table>
