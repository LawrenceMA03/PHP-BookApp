<form name="addBook" id="addBook" action="index.php?addBook" method="POST" role="form">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Title">
    </div>
    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" id="author" class="form-control" placeholder="Author">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" id="description" class="form-control" placeholder="Description">
    </div>
    <p>
        <button type="submit" class="btn btn-primary">Add</button>
    </p>
</form>