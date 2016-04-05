<?php

namespace DevsBestFriend\Http\Controllers;

use DevsBestFriend\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Faker\Factory as FakerFactory;

class RUserController extends Controller {

    public function postForm(Request $request){
        $number = $request->input('numUser');
        $birthday = $request->input('addBirthday');
        $profile = $request->input('addProfile');
        $faker = FakerFactory::create();
        $userArray = [];
        for($x=0; $x<$number; $x++){
            $userArray[$x] = [
                'name' => $faker->name,
            ];
            if($birthday){
                $userArray[$x]['date'] = $faker->dateTimeThisCentury->format('Y-m-d');
            }
            if($profile){
                $userArray[$x]['profile'] = $faker->text;
            }
        }
        echo $birthday;
        return view('randomuser.ruser', ['userArray' => $userArray]);
    }

}