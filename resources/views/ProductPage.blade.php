<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('common.jquery')
    @include('common.bootstrap')
    <title>{{ $sTitle }}</title>
</head>
<body>
    <div class="px-5">
        <h3>{{ $sTitle }}</h3>
        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group mt-3">
                <input type="submit" class="btn btn-primary mx-auto" value="{{ $sSubmitButtonPage }}">
            </div>
        </form>
    </div>
</body>
</html>