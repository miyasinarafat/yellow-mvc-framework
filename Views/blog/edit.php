<form method="post" action="/edit/blog">
    <input type="hidden" name="id" value="<?php echo $blog['id'];?>">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control title" id="title" placeholder="Enter title" value="<?php echo $blog['title'];?>">
    </div>
    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" class="form-control slug" id="slug" placeholder="Enter slug" value="<?php echo $blog['slug']; ?>">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control ckeditor" id="body" rows="5"><?php echo $blog['body']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>