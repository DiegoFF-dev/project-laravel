<?php

use App\Content;
use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
 /**
  * Run the database seeds.
  *
  * @return void
  */
 public function run()
 {
  Content::create([
   'ascape'     => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, accusamus nostrum! Odio natus nulla corrupti consequatur fuga. Asperiores nesciunt quod quia reprehenderit aliquid, velit recusandae perspiciatis corporis quae totam odit.',
   'source'     => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, accusamus nostrum! Odio natus nulla corrupti consequatur fuga. Asperiores nesciunt quod quia reprehenderit aliquid, velit recusandae perspiciatis corporis quae totam odit.',
   'finality'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, accusamus nostrum! Odio natus nulla corrupti consequatur fuga. Asperiores nesciunt quod quia reprehenderit aliquid, velit recusandae perspiciatis corporis quae totam odit.',
   'goal'       => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, accusamus nostrum! Odio natus nulla corrupti consequatur fuga. Asperiores nesciunt quod quia reprehenderit aliquid, velit recusandae perspiciatis corporis quae totam odit.',
   'vision'     => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, accusamus nostrum! Odio natus nulla corrupti consequatur fuga. Asperiores nesciunt quod quia reprehenderit aliquid, velit recusandae perspiciatis corporis quae totam odit.',
   'activities' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, accusamus nostrum! Odio natus nulla corrupti consequatur fuga. Asperiores nesciunt quod quia reprehenderit aliquid, velit recusandae perspiciatis corporis quae totam odit.',
   'place'      => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet, accusamus nostrum! Odio natus nulla corrupti consequatur fuga. Asperiores nesciunt quod quia reprehenderit aliquid, velit recusandae perspiciatis corporis quae totam odit.',
   'next'       => '18 a 21 de Maio de 2020',
   'amount'     => 650
  ]);
 }
}
