<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TrainSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'petName' => 'Bonnie',
            'petType'    => 'Rabbit',
            'trainingType'    => 'play_catch',
            'trainingDuration'   => time(),
            'appointmentDate'    => date('dd-mm-yyyy'),
        ];

        $this->db->table('train_form')->insert($data);
    }
}
