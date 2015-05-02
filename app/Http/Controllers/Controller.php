<?php namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;


abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;

    public function addEmail(){
        $email=Input::get('email');
        $jsonEmailPreferences=Input::get('jsonCattegorys');
        $user=new User(["email"=>$email]);
        $emailPreferences=json_decode( $jsonEmailPreferences);
        //for($emailPreferences as )

    }
    public function getListOfCategories(){
        return Categorie::all();
    }




}
