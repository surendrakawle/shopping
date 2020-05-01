<?php

use App\FormDefination;
use Illuminate\Database\Seeder;

class FormDefinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormDefination::create([
            "name"=>"PRODUCT",
            "form_json"=>'{"PRODUCT NAME":"text","PRODUCT CODE":"text","PRODUCT COLOR":"text","PRODUCT DESCRIPTION":"textarea","PRODUCT PRICE":"number","PRODUCT IMAGES":"file","col":"2","col_1":"2","row":"3","save":"Y","cancel":"Y","update":"Y","delete":"Y"}',
        ]);
        FormDefination::create([
            "name"=>"CATEGORY",
            "form_json"=>'{"CATEGORY NAME":"text","CATELOGUE NAME":"text","CATTEGORY DESCRIPTION":"textarea","col":"1","col_1":"2","row":"3","save":"Y","cancel":"Y","update":"Y","delete":"Y"}',
        ]);
        FormDefination::create([
            "name"=>"CATELOGUE",
            "form_json"=>'{"CATELOGUE NAME":"text","CATELOGUE DESCRIPTION":"textarea","col":"2","col_1":"2","row":"1","save":"Y","cancel":"Y","update":"Y","delete":"Y"}',
        ]);
    }
}
