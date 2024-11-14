<?php include  __DIR__ . '/../partials/header.php' ?>

<form action="/admin/posts" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="Title">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Content</label>
        <textarea name="body" class="form-control" id="body" rows="3"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Create">
</form>

<?php include  __DIR__ . '/../partials/pagefoot.php' ?>