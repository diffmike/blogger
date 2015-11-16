<?php include_once 'partials/top.php'; ?>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Test Blog</h1>
            <p class="lead blog-description">Editing post form</p>
        </div>

        <form class="form-horizontal" method="post" action="<?= $post->id ?>/update">
            <div class="form-group">
                <label for="title" class="col-sm-2 control-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" required value="<?= $post->title ?>" name="title" class="form-control" id="title" placeholder="Title">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="1" <?php if($post->is_active):?>checked<?php endif;?> name="is_active"> Active
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="content" class="col-sm-2 control-label">Content</label>
                <div class="col-sm-10">
                    <textarea class="form-control" rows="6" id="content" name="content" placeholder="Content"><?= $post->content ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="author" class="col-sm-2 control-label">Author</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="author" name="author" value="<?= $post->author ?>" placeholder="Author">
                </div>
            </div>
            <div class="form-group">
                <label for="published_at" class="col-sm-2 control-label">Publish date</label>
                <div class="col-sm-10">
                    <input type="datetime-local" class="form-control" required id="published_at" value="<?= date('Y-m-d\TH:i:s', strtotime($post->published_at)) ?>" name="published_at" placeholder="Publish date">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <a href="/" class="btn btn-warning">Cancel</a>
                    <a href="<?= $post->id ?>/delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this post?')">
                        Delete
                    </a>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </form>

    </div>

<?php include_once 'partials/bottom.php'; ?>