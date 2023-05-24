<?php

namespace App\Controllers;

use App\Models\TrainModel;
use CodeIgniter\RESTful\ResourceController;

class Train extends ResourceController

{
    public function __construct() {
        $this->trainModel = new TrainModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
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

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('content/training');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {

        $payload = [
            "petName" => $this->request->getPost('petName'),
            "petType" => $this->request->getPost('petType'),
            "trainingType" => $this->request->getPost('trainingType'),
            "trainingDuration" => $this->request->getPost('trainingDuration'),
            "appointmentDate" => $this->request->getPost('appointmentDate'),
            "status" => "Process",
        ];


        $this->trainModel->insert($payload);
        return redirect()->to('/thanks');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $training = $this->trainModel->find($id);
        
        if (!$training) {
            throw new \Exception("Data not found!");   
        }

        $payload = [
            "status" => $this->request->getPost('status'),
        ];
        $this->trainModel->update($id, $payload);
        return redirect()->to('/admin/TrainTable');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->trainModel->delete($id);
        return redirect()->to('/trainapps');
    }
}
