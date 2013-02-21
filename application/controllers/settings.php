<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function index()
	{
		// Insert some records
		$setting = new FooExample\Models\Setting();
		$setting->name = 'Test Setting One';
		$setting->value = 'Created One';
		$setting->save();

		$setting = new FooExample\Models\Setting();
		$setting->name = 'Test Setting Two';
		$setting->value = 'Created Two';
		$setting->save();

		$setting = new FooExample\Models\Setting();
		$setting->name = 'Test Setting Three';
		$setting->value = 'Created Three';
		$setting->save();

		// Retrieve the record with the ID 1
		$setting = FooExample\Models\Setting::find(1);
		var_dump($setting->toArray());
		echo '<hr>';

		// Retrieve all records
		$settings = FooExample\Models\Setting::all();
		var_dump($settings->toArray());
		echo '<hr>';
	}
}

/* End of file settings.php */
/* Location: ./application/controllers/settings.php */