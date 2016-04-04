<?php

namespace DevsBestFriend\Http\Controllers;

use DevsBestFriend\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Faker\Factory as FakerFactory;

class RUserController extends Controller {

    public function postForm(Request $request){
        $number = $request->input('numUser');
        $faker = FakerFactory::create();
        for($x=0; $x<$number; $x++){
            echo $faker->name;
            echo '<br>';
            echo $faker->dateTimeThisCentury->format('Y-m-d');
            echo '<br>';
            echo $faker->text;
            echo '<br>';

            echo '<br>';
        }
        return view('randomuser.ruser');
    }

}