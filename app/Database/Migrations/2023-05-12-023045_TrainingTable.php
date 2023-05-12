<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TrainingTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "petName" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "petType" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "trainingType" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "trainingDuration" => [
                "type"=> "TIME",
                "null"=> true,
            ],
            "appointmentDate" => [
                "type"=> "DATE",
                "null"=> true,
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('train_form', true);
    }

    public function down()
    {
        //
    }
}
