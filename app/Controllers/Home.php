<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('content/main');
    }

    public function groom()
    {
        return view('content/groom');
    }

    public function training()
    {
        return view('content/training');
    }

    public function feed()
    {
        return view('content/feed');
    }

    public function admin()
    {
        return view('admin/index');
    }
    public function groomTable()
    {
        return view('admin/GroomTable');
    }

    public function trainTable()
    {
        return view('admin/TrainTable');
    }

}
