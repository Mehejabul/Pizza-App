<?php

namespace Database\Seeders;

use App\Models\BasicSetting;
use App\Models\ContactInfo;
use App\Models\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialMedia::create([
            'sm_facebook' => 'https://www.facebook.com/',
        ]);

        BasicSetting::create([
            'bs_company' => "Pizzaro",
        ]);

        ContactInfo::create([
            'cont_phone1' => '01714294499',
            'cont_email1' => 'oittizzo@gmail.com',
            'cont_address1' => 'Chatmohar, pabna',
        ]);
    }
}
