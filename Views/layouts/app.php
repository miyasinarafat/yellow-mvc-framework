<?php
$url = ltrim($_SERVER['REQUEST_URI'], '/');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">
    <title>Yellow MVC Structure</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/styles.css">
</head>
<body>
<!-- Header -->
<header>
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-link" href="/">Blog</a>
                <a class="nav-link" href="/create/blog">Create Blog</a>
            </nav>
        </div>
    </div>
    <?php if ($url == ''): ?>
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">The Yellow Blog</h1>
            <p class="lead blog-description">An example blog template built with Bootstrap.</p>
        </div>
    </div>
    <?php endif; ?>
</header>
<main role="main" class="container">
    <div class="main-content mt-50">
        <div class="row">
            <div class="col-sm-8 blog-main">

                <?php
                    $url = ltrim($_SERVER['REQUEST_URI'], '/');
                    echo $content_for_layout;
                ?>

                <?php if ($url == ''): ?>
                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>
                <?php endif; ?>
            </div><!-- /.blog-main -->
            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module sidebar-module-inset">
                    <h4>About</h4>
                    <p>Lorem ipsum dolor sit <em>amet, consectetur</em> adipisicing elit. Aut earum error fugit iure molestias nemo odit pariatur quam qui ratione.</p>
                </div>
                <div class="sidebar-module">
                    <h4>Archives</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2017</a></li>
                        <li><a href="#">February 2017</a></li>
                        <li><a href="#">January 2017</a></li>
                        <li><a href="#">December 2016</a></li>
                        <li><a href="#">November 2016</a></li>
                        <li><a href="#">October 2016</a></li>
                        <li><a href="#">September 2016</a></li>
                        <li><a href="#">August 2016</a></li>
                        <li><a href="#">July 2016</a></li>
                        <li><a href="#">June 2016</a></li>
                        <li><a href="#">May 2016</a></li>
                        <li><a href="#">April 2016</a></li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </div>
</main><!-- /.container -->

<footer class="blog-footer">
    <p> All Rights Reserved <a href="https://themeyellow.com/">ThemeYellow</a> © <?php echo date('Y')?></p>
    <p>
        <a href="#">Back to top</a>
    </p>
</footer>

<script src="../../assets/js/jquery-3.2.1.slim.min.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="http://cdn.ckeditor.com/4.8.0/basic/ckeditor.js"></script>
<!--<script>
    CKEDITOR.replace( 'body' );
</script>-->
<script src="../../assets/js/main.js"></script>
</body>
</html>