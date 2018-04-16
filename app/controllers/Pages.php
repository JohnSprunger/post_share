<?php
  class Pages extends Controller {
    public function __construct(){
        $this->postModel = $this->model('Post');
    }

    // The index function
    public function index(){
        $posts = $this->postModel->getPosts();

        $data = [
            'title' => 'Post Share',
            'posts' => $posts
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About Us'
        ];

        $this->view('pages/about', $data);
    }
  }