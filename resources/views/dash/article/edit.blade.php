<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Article</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div class="container">
        <h2>Edit Article</h2>

        <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="foto">Article Image:</label>
                <input type="file" name="foto" class="form-control">
                <img src="{{ asset('images/' . $article->foto) }}" alt="Current Image" class="img-thumbnail mt-3" style="width: 150px;">
            </div>

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ $article->title }}">
            </div>

            <div class="form-group">
                <label for="desc">Short Description:</label>
                <input type="text" name="desc" class="form-control" value="{{ $article->desc }}">
            </div>

            <div class="form-group">
                <label for="body">Full Description:</label>
                <textarea name="body" class="form-control" rows="5">{{ $article->body }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Article</button>
        </form>
    </div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



