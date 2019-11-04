<?php

use App\Male;
use Illuminate\Database\Seeder;

class ModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new Male();
        $model->name = "Model 1";
        $model->dateOfBirth = "17/12/1991";
        $model->height = 1.80;
        $model->national = "Viet Nam";
        $model->description = "Hottest guy with muscle body and white skin";
        $model->job = "Model and actor";
        $model->image = "vietnam.jpg";
        $model->viewCount = "0";
        $model->save();

        $model = new Male();
        $model->name = "Model 2";
        $model->dateOfBirth = "20/2/1990";
        $model->height = 1.85;
        $model->national = "Korean";
        $model->description = "Park Hae-jin (Korean: 박해진, born May 1, 1983) is a South Korean actor. He is best known for his supporting roles in dramas My Love from the Star (2013) and Doctor Stranger (2014), and his leading roles in Bad Guys (2014), Cheese in the Trap (2016) and Man to Man (2017).";
        $model->job = "Model and businessmen";
        $model->image = "korean.jpg";
        $model->viewCount = "0";
        $model->save();

        $model = new Male();
        $model->name = "Model 3";
        $model->dateOfBirth = "30/5/1995";
        $model->height = 1.90;
        $model->national = "England";
        $model->description = "Gentleman with a mystic beauty";
        $model->job = "Model";
        $model->image = "england.jpg";
        $model->viewCount = "0";
        $model->save();

        $model = new Male();
        $model->name = "Model 4";
        $model->dateOfBirth = "09/08/1989";
        $model->height = 1.87;
        $model->national = "China";
        $model->description = "Hotest guy <3";
        $model->job = "Model and actor";
        $model->image = "china.jpg";
        $model->viewCount = "0";
        $model->save();
    }
}
