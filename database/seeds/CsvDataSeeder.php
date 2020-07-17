<?php

use Flynsarmy\CsvSeeder\CsvSeeder;
use Illuminate\Support\Facades\DB;

class CsvDataSeeder extends CsvSeeder
{   
    public function __construct()
	{
		$this->table = 'csv_data';
		$this->filename = base_path().'/docs/property-data.csv';
	}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table($this->table)->truncate();

		parent::run();
    }
}
