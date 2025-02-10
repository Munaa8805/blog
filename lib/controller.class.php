<?php


abstract class Controller
{
    protected $data;
    protected $model;
    protected $params;

    public function __construct($data = array())
    {
        $this->data = $data;
        $this->params = App::getRouter()->getParams();
    }

    public function getData()
    {
        return $this->data;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getParams()
    {
        return $this->params;
    }

    //// set-функцийг нэмж өгөх



    public function setData($data)
    {
        $this->data = $data;
    }

    public function setModel($model)
    {
        $this->model = $model;
    }

    public function setParams($params)
    {
        $this->params = $params;
    }
}
