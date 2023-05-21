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
        $groomimg = $this->groomModel->paginate(5, 'grooming');

        $payload = [
            "grooming" => $groomimg,
            "pager" => $this->groomModel->pager
        ];

        echo view('admin/GroomTable', $payload);
    }
    public function groomAppointments()
    {
        $groomimg = $this->groomModel->paginate(5, 'grooming');

        $payload = [
            "grooming" => $groomimg,
            "pager" => $this->groomModel->pager
        ];

        echo view('content/groom_appoints', $payload);
    }

    public function trainTable()
    {
        $training = $this->trainModel->paginate(5, 'training');

        $payload = [
            "training" => $training,
            "pager" => $this->trainModel->pager
        ];

        echo view('admin/TrainTable', $payload);
    }

    public function trainAppointments()
    {
        $training = $this->trainModel->paginate(5, 'training');

        $payload = [
            "training" => $training,
            "pager" => $this->trainModel->pager
        ];

        echo view('content/train_appoints', $payload);
    }

    public function __construct() {
        $this->groomModel = new GroomModel();
        $this->trainModel = new TrainModel();
    }

    public function thankspage()
    {
        return view('content/thanks');
    }

}
