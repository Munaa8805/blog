<?php


class ContactController extends Controller
{
    public function __construct()
    {
        // echo 'Pages controller<br>';
        parent::__construct();
        $this->model = new Message();
    }


    public function index()
    {
        // render all pages from the database


        // Session::setMessage("Flash message ...");
        if ($_POST) {

            if ($this->model->addNewMessage($_POST)) {
                Session::setMessage("Message sent successfully");
            }
        }

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
