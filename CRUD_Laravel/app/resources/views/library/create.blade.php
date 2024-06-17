<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Form</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
<a href="/library" class="btn btn-primary">Back</a>
    <div class="container mt-5">
        <form action="{{route('library.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="book_name" class="form-label">Book Name</label>
                <input type="text" class="form-control" id="book_name" name="book_name" placeholder="Enter book name">
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Enter author's name">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Enter price">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
