<?php

namespace app\controller;

use app\core\Controller;
use app\model\Post;

class PostController extends Controller
{
    private $post;

    /**
     * PostController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->post = new Post;
    }

    /**
     * Index page with posts list
     */
    public function getIndex()
    {
        $posts = $this->post->all();
        $this->view->render('home.php', compact('posts'));
    }

    /**
     * Form for create new post
     */
    public function getNew()
    {
        $this->view->render('new.php');
    }

    /**
     * Saving new post
     */
    public function postNew()
    {
        $title = array_get($_POST, 'title');
        $content = array_get($_POST, 'content');
        $author = array_get($_POST, 'author');
        $publishedAt = date('Y-m-d H:i:s', strtotime(array_get($_POST, 'published_at')));
        $isActive = (int)array_get($_POST, 'is_active');
        $this->post->addPost($title, $isActive, $author, $content, $publishedAt);
        redirect();
    }

    /**
     * Form for edit existed post
     * @param int $id
     */
    public function getEdit($id)
    {
        $post = $this->post->one($id);
        $this->view->render('edit.php', compact('post'));
    }

    /**
     * Saving edited post
     * @param int $id
     */
    public function postEdit($id)
    {
        $title = array_get($_POST, 'title');
        $content = array_get($_POST, 'content');
        $author = array_get($_POST, 'author');
        $publishedAt = date('Y-m-d H:i:s', strtotime(array_get($_POST, 'published_at')));
        $isActive = (int)array_get($_POST, 'is_active');
        $this->post->updatePost($id, $title, $isActive, $author, $content, $publishedAt);
        redirect();
    }

    /**
     * Delete post
     * @param int $id
     */
    public function getDelete($id)
    {
        $this->post->deletePost($id);
        redirect();
    }
}