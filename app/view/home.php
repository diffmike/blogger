<?php include_once 'partials/top.php'; ?>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Test Blog</h1>
            <p class="lead blog-description">Home page of the test blog</p>
        </div>

        <?php foreach($posts as $item):?>
            <div class="blog-post">
                <h2 class="blog-post-title"><?= $item->title ?></h2>
                <p class="blog-post-meta">
                    <?= date('F j, Y, H:i', strtotime($item->published_at)) ?> by <?= $item->author ?>
                    <span class="pull-right"><a href="<?= $item->id ?>/edit">Edit</a></span>
                </p>
                <p><?= nl2br($item->content) ?></p>
            </div>
        <?php endforeach;?>
    </div>

<?php include_once 'partials/bottom.php'; ?>
