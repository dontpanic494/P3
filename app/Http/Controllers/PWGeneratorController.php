<?php

namespace DevsBestFriend\Http\Controllers;

use DevsBestFriend\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Hackzilla\PasswordGenerator\Generator\HumanPasswordGenerator;

class PWGeneratorController extends Controller {


    public function postForm(Request $request) {

		$this->validate($request, [
			'word_count' => 'required|min:1|numeric',
		]);

		$generator = new HumanPasswordGenerator();

        $count = (int)$request->input('word_count');
        $addNum = $request->input('add_num');
        $addSpe = $request->input('add_spe');

		$generator
		  ->setWordList('/usr/share/dict/words')
		  ->setWordCount($count)
		  ->setWordSeparator('-');
		$password = $generator->generatePasswords(1);

		if($addNum){
			$password['num']=rand(1,99);
		}

		if($addSpe){
			$set = str_split('!@#$&*');
			shuffle($set);
			$password['spe']=$set[0];
		}

		return view('passwordgenerator.password', ['password' => $password]);

    }
}