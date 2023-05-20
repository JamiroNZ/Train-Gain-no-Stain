<?php

namespace App\Controllers;
use App\Models\GroomModel;
use App\Models\TrainModel;

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
        $groomimg = $this->groomModel->findAll();

        $payload = [
            "grooming" => $groomimg
        ];

        echo view('admin/GroomTable', $payload);
    }

    public function trainTable()
    {
        $training = $this->trainModel->findAll();

        $payload = [
            "training" => $training
        ];

        echo view('admin/TrainTable', $payload);
    }

    public function __construct() {
        $this->groomModel = new GroomModel();
        $this->trainModel = new TrainModel();
    }

}
