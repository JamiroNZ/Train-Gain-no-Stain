<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class GroomSeeder extends Seeder
{
    public function run()
    {

        $data = [
            'petName' => 'Bonnie',
            'petType'    => 'Rabbit',
            'groomingType'    => 'Bath',
            'appointmentDate'    => date('dd-mm-yyyy'),
            'appointmentTime'   => time(),
        ];

        $this->db->table('groom_form')->insert($data);
    }
}
