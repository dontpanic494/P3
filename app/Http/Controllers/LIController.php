<?php

namespace DevsBestFriend\Http\Controllers;

use DevsBestFriend\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Badcow\LoremIpsum\Generator;

class LIController extends Controller {

    public function postForm(Request $request){

    	$this->validate($request, [
    		'numPara' => 'required|min:1|numeric',
    		]);

        $number = $request->input('numPara');
        $generator = new Generator();
        $paragraphs = $generator->getParagraphs($number);

        return view('loremipsum.lorem', ['paragraphs' => $paragraphs]);
    }

}