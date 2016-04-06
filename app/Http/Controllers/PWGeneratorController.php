<?php

namespace DevsBestFriend\Http\Controllers;

use DevsBestFriend\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PWGeneratorController extends Controller {


    public function postPassword(Request $request) {
        $count = $request->input('word_count');
        $addNum = $request->input('add_num');
        $addSpe = $request->input('add_spe');
        for($x=0; $x<$count; $x++){
            //I BOOKMAKED A PACKAGE FOR THIS

        }    
    }
}