<?php
class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
        if(isLoggedIn()){
            redirect('posts');
        }

        $data = [
            'title' => 'Post Share',
            'description' => 'A simple social network built on the PrePHase framework'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About',
            'description' => 'An app to share posts with other users'
        ];

        $this->view('pages/about', $data);
    }
}