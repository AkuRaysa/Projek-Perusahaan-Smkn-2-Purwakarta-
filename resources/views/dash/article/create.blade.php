<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Article</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<div class="container mt-5">
    <h2>Create a New Article</h2>
    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="foto">Article Image:</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="title">Title:</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="desc">Short Description:</label>
            <input type="text" name="desc" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="body">Full Description:</label>
            <textarea name="body" class="form-control"></textarea>
        </div>

        <a href="{{ url('article') }}" class="btn btn-danger"><i class="fa-solid fa-arrow-left"></i> Cancel</a>
        <button type="submit" class="btn btn-primary">Submit  <i class="fa-solid fa-arrow-up-from-bracket"></i></button>
    </form>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

