<?php
class Post {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getPosts(){
        $this->db->query('SELECT *,
                          posts.id as postId, 
                          users.id as userID,
                          posts.created_at as postCreated, 
                          users.created_at as usersCreated
                          FROM posts
                          INNER JOIN users
                          ON post.user_id = users.id
                          ORDER BY post.created_at DESC
                          ');

        $results = $this->db->resultSet();

        return $results;
    }
}