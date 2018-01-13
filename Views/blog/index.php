<?php include_once ROOT .'/vendor/autoload.php';
use App\Config\Functions;
$obj = new Functions();
foreach ($blogs as $blog): ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><a href="blog/<?php echo $blog['slug']; ?>"><?php echo $obj->limit($blog['title'],29); ?></a></h2>
        <p class="blog-post-meta"><?php echo date('d/M/Y', strtotime($blog['created_at'])); ?></p>
        <?php echo strip_tags($obj->limit($blog['body'],300)); ?>
        <hr>
        <a href="/blog/edit/<?php echo $blog['id']; ?>" class="btn btn-info">Edit Blog</a>
        <a onclick="return confirm('Are you sure!');" href="/blog/delete/<?php echo $blog['id']; ?>" class="btn btn-danger">Delete Blog</a>
    </div><!-- /.blog-post -->
<?php endforeach; ?>