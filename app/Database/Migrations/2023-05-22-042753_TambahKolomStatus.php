<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TambahKolomStatus extends Migration
{
    public function up()
    {
        $fields =[
            'status' =>[
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
        ];

        $this->forge->addColumn('groom_form', $fields);
        $this->forge->addColumn('train_form', $fields);
    }

    public function down()
    {
        //
    }
}
