<?php


class ContactController extends Controller
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


        // var_dump($webs);
        return (new View([
            'site_title' => Config::get('site_name'),

        ], 'contact' . DS . 'index.html'))->render();
    }
    public function admin_index()
    {
        // var_dump($webs);
        return (new View([
            'site_title' => Config::get('site_name'),

        ], 'contact' . DS . 'index.html'))->render();
    }
}
