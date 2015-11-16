<?php
namespace app\model;

use app\core\Model;

class Post extends Model
{
    /**
     * Posts table
     * @var string
     */
    protected $table = 'posts';

    /**
     * Add a post to database
     * @param string $title
     * @param int $isActive
     * @param string $author
     * @param string $content
     * @param string$publishDate
     */
    public function addPost($title, $isActive, $author, $content, $publishDate)
    {
        $sql = "INSERT INTO posts (title, is_active, author, content, published_at)
                VALUES (:title, :is_active, :author, :content, :published_at)";
        $query = $this->db->prepare($sql);
        $parameters = array(':title' => $title, ':is_active' => $isActive, ':author' => $author,
                            ':content' => $content, ':published_at' => $publishDate);
        return $query->execute($parameters);
    }

    /**
     * Update a post in database
     * @param int $id
     * @param string $title
     * @param int $isActive
     * @param string $author
     * @param string $content
     * @param string$publishDate
     */
    public function updatePost($id, $title, $isActive, $author, $content, $publishDate)
    {
        $sql = "UPDATE posts
                SET title = :title, is_active = :is_active, author = :author, content = :content, published_at = :published_at
                WHERE {$this->idField} = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':title' => $title, ':is_active' => $isActive, ':author' => $author,
                            ':content' => $content, ':published_at' => $publishDate, ':id' => $id);
        return $query->execute($parameters);
    }

    /**
     * Delete a post from database
     * @param int $id
     */
    public function deletePost($id)
    {
        $sql = "DELETE FROM posts WHERE {$this->idField} = :id";
        $query = $this->db->prepare($sql);
        $parameters = array(':id' => $id);
        return $query->execute($parameters);
    }

}