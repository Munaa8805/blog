<?php


class PagesController extends Controller
{
    public function __construct()
    {
        // echo 'Pages controller<br>';
        parent::__construct();
    }


    public function student_view($id)
    {
        echo 'Student view';
    }
    public function index()
    {
        return (new View([
            'site_title' => Config::get('site_name'),
            'student_name' => 'Амараа',
        ], 'pages' . DS . 'index.html'))->render();
    }
    public function view()
    {
        // $this->data['site_title'] = $this->params[0];
        // $this->data['course_name'] = 'React JS Course';
        // $this->data['course_price'] = '$100';
        // $this->data['course_description'] = 'This is a React JS course';
        // $view = new View($this->data, 'pages/view.html');
        // return $view->render();
        return (new View([
            'site_title' => Config::get('site_name') . ' | Course',
            'course_name' => 'React эхнээс дуустал',
            'course_price' => '100',
        ], 'pages' . DS . 'view.html'))->render();
    }
    public function admin_view()
    {
        return (new View([
            'site_title' => Config::get('site_name') . ' | Admin',
            'visit_count' => 'secret#12',
        ], 'pages' . DS . 'admin_view.html'))->render();
    }
}
