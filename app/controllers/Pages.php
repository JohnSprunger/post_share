<?php
  class Pages extends Controller {
    public function __construct(){

    }

    public function index(){
        $data = [
            'title' => 'Post Share',
            'description' => 'A simple social network built with the PrePHase framework'
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title' => 'About This Project',
            'description' => 'A simple web application to let you share post with other users.' . "<br>" .
            'This was made as both a learning experience and a way to demonstrate the power of PrePHase!'
        ];

        $this->view('pages/about', $data);
    }
  }