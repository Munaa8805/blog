<?php


class PagesController extends Controller
{
    public function __construct()
    {
        // echo 'Pages controller<br>';
        parent::__construct();
    }

    public function admin_view($id)
    {
        echo 'Admin view';
    }
    public function student_view($id)
    {
        echo 'Student view';
    }
    public function index()
    {
        echo 'Index action';
        echo '<br>';
        echo 'hi: <pre>';
        print_r($this->params);
    }
    public function view()
    {
        echo 'View action';
        echo '<br>';
        echo 'hi: <pre>';
        print_r($this->params);
    }
}
