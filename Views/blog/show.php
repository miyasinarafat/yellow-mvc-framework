<div class="blog-post">
    <h2 class="blog-post-title"><?php echo $blog['title']; ?></h2>
    <p class="blog-post-meta"><?php echo date('d/M/Y', strtotime($blog['created_at'])); ?></p>
    <?php echo $blog['body']; ?>
    <hr>
    <a href="/blog/edit/<?php echo $blog['id']; ?>" class="btn btn-info">Edit Blog</a>
    <a onclick="return confirm('Are you sure!');" href="/blog/delete/<?php echo $blog['id']; ?>" class="btn btn-danger">Delete Blog</a>
</div><!-- /.blog-post -->