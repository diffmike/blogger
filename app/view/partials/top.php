<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/favicon.ico">

        <title>Blog</title>

        <!-- Bootstrap core CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/css/blog.css" rel="stylesheet">
    </head>

    <body>

        <div class="blog-masthead">
            <div class="container">
                <nav class="blog-nav">
                    <a class="blog-nav-item <?= !trim($_SERVER['REQUEST_URI'], '/') ? 'active' : '' ?>" href="/">Home</a>
                    <a class="blog-nav-item <?= trim($_SERVER['REQUEST_URI'], '/') == 'new' ? 'active' : '' ?>" href="/new">New</a>
                </nav>
            </div>
        </div>
