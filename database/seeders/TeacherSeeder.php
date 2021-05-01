<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Teacher::truncate();
               
               $fieldValues = [
                   'Teacher One',
                   'Teacher Two',
                   'Teacher Three'                   
                   ];

               foreach ($fieldValues as $values) {
                   $db_array =[
                       'name'   	=> $values
                   ];
                   Teacher::create($db_array);

               }
               $this->command->info('Teacher table seeded');
    }
}