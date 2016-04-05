<?php

namespace DevsBestFriend\Http\Controllers;

use DevsBestFriend\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Badcow\LoremIpsum\Generator;

class LIController extends Controller {

    public function postForm(Request $request){
        $number = $request->input('numPara');
        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($number);
        return view('loremipsum.lorem', ['paragraphs' => $paragraphs]);
    }

}