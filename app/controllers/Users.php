<?php
class Users extends Controller{
    public function __construct(){

    }

    public function register(){
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
        }
        else{
            // Init data
            $data =[
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'emali_err' => '',
                'password_err' => '',
                'confirm_passsword_err' => ''
            ];

            // Load view
            $this->view('users/register', $data);
        }
    }

    public function login(){
        // Check for POST
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Process form
        }
        else{
            // Init data
            $data =[
                'email' => '',
                'password' => '',
                'emali_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('users/login', $data);
        }
    }
}
?>