<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class GroomTable extends Migration
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
            "groomingType" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "appointmentDate" => [
                "type"=> "DATE",
                "null"=> true,
            ],
            "appointmentTime" => [
                "type"=> "TIME",
                "null"=> true,
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('groom_form', true);
    }

    public function down()
    {
        //
    }
}
