<?php


class Categories extends Controller
{
    public function __construct(){

        $this->category = $this->getModel('Category');
    }

    public function index(){
        $data = array();
        $data['title'] = "All Categories";
        $data['categories'] = $this->category->getAll();

        $this->view('categories/index', $data);
    }

    public function create(){
        $data = array();
        $data['title'] = 'Create Category';

        $this->view('categories/create', $data);
    }

    public function store(){
        $data = array();

        $name = $_POST['name'];
        
        if(empty(trim($name))){
            die("Name is required");
        }

        $data['name'] = $name;

        if($this->category->add($data)){
            $this->index();
        }else{
            die("Something wrong happened");
        }
    }
}