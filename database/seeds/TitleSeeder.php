<?php

use Illuminate\Database\Seeder;

use App\Models\Title as Title;

class TitleSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Title::create(['name' => 'Araştırma Görevlisi',
    'abbreviation' => 'Arş. Gör.',
    'description' => '']);
    Title::create(['name' => 'Yardımcı Doçent Doktor',
    'abbreviation' => 'Yrd. Doç. Dr.',
    'description' => '']);
    Title::create(['name' => 'Doçent Doktor',
    'abbreviation' => 'Doç. Dr.',
    'description' => '']);
    Title::create(['name' => 'Profesör',
    'abbreviation' => 'Prof.',
    'description' => '']);
    Title::create(['name' => 'Okutman',
    'abbreviation' => 'Okutman',
    'description' => '']);
  }
}
