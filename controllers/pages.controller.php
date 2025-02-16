<?php


class PagesController extends Controller
{
    public function __construct()
    {
        // echo 'Pages controller<br>';
        parent::__construct();
        $this->model = new Page();
    }


    public function index()
    {
        // render all pages from the database
        Session::setMessage("Hello flash...");
        $webs = $this->model->getList();
        // var_dump($webs);
        return (new View([
            'site_title' => Config::get('site_name'),
            'webs' => $webs,
        ], 'pages' . DS . 'index.html'))->render();
    }
    public function  admin_index()
    {
        // render all pages from the database

        $webs = $this->model->getList();
        // var_dump($webs);
        return (new View([
            'site_title' => Config::get('site_name') . ' | Admin',
            'webs' => $webs,
        ], 'pages' . DS . 'admin_index.html'))->render();
    }
    //// View page CONTENT
    public function view()
    {
        // $this->data['site_title'] = $this->params[0];
        // $this->data['course_name'] = 'React JS Course';
        // $this->data['course_price'] = '$100';
        // $this->data['course_description'] = 'This is a React JS course';
        // $view = new View($this->data, 'pages/view.html');
        // return $view->render();
        $web =  $this->model->getAlias($this->params[0]);
        return (new View([
            'site_title' => Config::get('site_name') . ' | Blog',
            'web' => $web[0],
        ], 'pages' . DS . 'view.html'))->render();
    }


    ////
    public function admin_view()
    {
        return (new View([
            'site_title' => Config::get('site_name') . ' | Admin',
            'visit_count' => 'secret#12',
        ], 'pages' . DS . 'admin_view.html'))->render();
    }
}