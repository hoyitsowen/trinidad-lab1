<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Categories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6f9; /* light gray background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            padding: 40px 0;
        }
        .container {
            max-width: 800px;
        }
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff; /* standout blue header */
            color: white;
            font-weight: 600;
            text-align: center;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
        }
        table thead {
            background-color: #e9ecef;
        }
        table tbody tr:hover {
            background-color: #f1f5ff;
            transition: background-color 0.2s;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card bg-white">
            <div class="card-header">
                📚 Book Categories
            </div>
            <div class="card-body">
                <table class="table table-bordered align-middle text-center mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $category->category_id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->description }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-muted">No categories found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
