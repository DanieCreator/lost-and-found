<?php

class Pages extends Controller
{

    public function index($params = []){
        $data = array();
        $data['title'] = "Home";

        $this->view('pages/index', $data);

    }

    public function about()
    {
        $data = array();
        $data['title'] = "About";

        $this->view('pages/about', $data);

    }

    public function contact(){
        $data = array();
        $data['title'] = "Contact";

        $this->view('pages/contact', $data);

    }

    public function login(){

        $data = array();
        $data['title'] = "Login";

        $this->view('pages/login', $data);
    }

    public function register(){

        $data = array();
        $data['title'] = "Register";

        $this->view('pages/register', $data);
    }

}