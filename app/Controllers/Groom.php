<?php

namespace App\Controllers;

use App\Models\GroomModel;
use CodeIgniter\RESTful\ResourceController;

class Groom extends ResourceController

{
    public function __construct() {
        $this->groomModel = new GroomModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $groom = $this->groomModel->findAll();

        $payload = [
            "grooming" => $groom
        ];

        echo view('admin/GroomTable', $payload);
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
        echo view('content/grooming');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $datetime = $this->request->getPost('appointment_datetime');
        $timestamp = strtotime($datetime);
        $date = date('Y-m-d', $timestamp);
        $time = date('H:i:s', $timestamp);

        $payload = [
            "petName" => $this->request->getPost('petName'),
            "petType" => $this->request->getPost('petType'),
            "groomingType" => $this->request->getPost('groomingType'),
            "appointmentDate" => $date,
            "appointmentTime" => $time,
        ];


        $this->groomModel->insert($payload);
        return redirect()->to('/main');
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
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
