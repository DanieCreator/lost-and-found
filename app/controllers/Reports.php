<?php


class Reports extends Controller
{
    public function __construct()
    {
        $this->post = $this->getModel('Report');
    }

    public function index(array $params = []){
        $data = array();

        $data['title'] = "Reports";
        $this->view('reports/index', $data);
    }

    public function create(){
        echo "Create Report";
    }
}