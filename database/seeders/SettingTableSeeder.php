<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Setting::insert([
            'title' => 'Title',
            'content' => 'Content',
            'site_name' => 'Survey',
            'success_title' => 'Success title',
            'success_content' => 'Success content',
            'success_file_content' => 'Success file content',
            'success_botton_content' => 'Success bottom content',
            'home_page_terms' => 'Home Page Terms',
        ]);

    }
}
