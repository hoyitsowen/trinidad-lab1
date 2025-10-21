<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Categories</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: #f4f6f9; }
    .card { border: none; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-radius: 12px; }
    .card-header { background-color: #007bff; color: #fff; font-weight: 600; }
    .table img { width: 60px; height: 60px; object-fit: cover; border-radius: 8px; }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="card">
      <div class="card-header text-center">📚 Book Categories</div>
      <div class="card-body">
        <form method="GET" class="mb-4 d-flex" action="{{ url('/book-categories') }}">
          <input type="text" name="search" value="{{ $search }}" class="form-control me-2" placeholder="Search category...">
          <button class="btn btn-primary">Search</button>
        </form>

        @if(session('success'))
          <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered table-hover text-center align-middle">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th>Category Name</th>
              <th>Description</th>
              <th>Image</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($categories as $category)
              <tr>
                <td>{{ $category->category_id }}</td>
                <td>{{ $category->category_name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                  @if($category->image)
                    <img src="{{ asset('storage/' . $category->image) }}" alt="Image">
                  @else
                    <span class="text-muted">No image</span>
                  @endif
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="4" class="text-muted">No categories found.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
