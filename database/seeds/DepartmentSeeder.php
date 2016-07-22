<?php

use Illuminate\Database\Seeder;

use App\Models\Department as Department;

class DepartmentSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    Department::create(['code' => 'BOTE',
    'name' => 'Bilgisayar ve Öğretim Teknolojileri Öğretmenliği',
    'faculty_id' => 1]);
    Department::create(['code' => 'TO',
    'name' => 'Türkçe Öğretmenliği',
    'faculty_id' => 1]);
    Department::create(['code' => 'SINO',
    'name' => 'Sınıf Öğretmenliği',
    'faculty_id' => 1]);
    Department::create(['code' => 'IMMT',
    'name' => 'İlköğretim Matematik Öğretmenliği',
    'faculty_id' => 1]);
    Department::create(['code' => 'IMMT2',
    'name' => 'İlköğretim Matematik Öğretmenliği (II. Öğretim)',
    'faculty_id' => 1]);
    Department::create(['code' => 'PFE',
    'name' => 'Pedagojik Formasyon Programı',
    'faculty_id' => 1]);
    Department::create(['code' => 'RPD',
    'name' => 'Rehberlik ve Psikolojik Danışmanlık',
    'faculty_id' => 1]);
    Department::create(['code' => 'IF',
    'name' => 'İlköğretim Fen Bilgisi Öğretmenliği',
    'faculty_id' => 1]);
    Department::create(['code' => 'IF2',
    'name' => 'İlköğretim Fen Bilgisi Öğretmenliği (II. Öğretim)',
    'faculty_id' => 1]);
    Department::create(['code' => 'SBO',
    'name' => 'Sosyal Bilgiler Öğretmenliği',
    'faculty_id' => 1]);
    Department::create(['code' => 'SBO2',
    'name' => 'Sosyal Bilgiler Öğretmenliği (II. Öğretim)',
    'faculty_id' => 1]);
    Department::create(['code' => 'IDKO',
    'name' => 'İlköğretim Din Kültürü ve Ahlak Bilgisi Öğretmenliği',
    'faculty_id' => 1]);
    Department::create(['code' => 'IDKO2',
    'name' => 'İlköğretim Din Kültürü ve Ahlak Bilgisi Öğretmenliği (II. Öğretim)',
    'faculty_id' => 1]);
  }
}
