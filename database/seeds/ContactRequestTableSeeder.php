<?php

use App\Gazzete\Role;
use App\Gazzete\User;
use Illuminate\Database\Seeder;

class ContactRequestTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(\App\Gazzete\ContactRequest::class, 3)->create();
	}
}