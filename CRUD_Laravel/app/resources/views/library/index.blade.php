<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-3">
         
            <a href="{{route('library.create')}}" class="btn btn-primary">Add Book</a>
        </div>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Book Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Author</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $val)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $val->book_name }}</td>
                    <td>{{ $val->price }}</td>
                    <td>{{ $val->author }}</td>
                    <td>
                        <div class="d-flex">
                            <form action="{{ route('library.destroy', $val->id) }}" method="post" class="me-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            <a href="{{ route('library.edit', $val->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {!! $data->links() !!}
        </div>
    </div>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
