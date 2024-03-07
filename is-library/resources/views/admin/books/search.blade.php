<form action="{{ route('books.search') }}" method="GET" class="mb-3">
    <div class="row mb-2">
        <div class="col-md-4">
            <input type="text" class="form-control" name="barcode" placeholder="ბარკოდი">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" name="call_number" placeholder="უნიკალური კოდი">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" name="title" placeholder="სათაური">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-3">
            <input type="text" class="form-control" name="author" placeholder="ავტორი">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" name="activity_date" placeholder="თარიღი">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" name="collection" placeholder="კოლექცია">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" name="material" placeholder="მასალა">
        </div>
    </div>

    <button type="submit" class="btn btn-primary btn-sm mb-2">ძებნა</button>
</form>
