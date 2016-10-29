<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests;
use App\models\ExampleUsers;
use App\models\Roles;

class HomeController extends Controller {

    public function about() {
        Log::useFiles(storage_path() . '/info.log');
        Log::info('Call to about page' . microtime(true));

        // belongsTo
//        $res = Roles::findOrFail(1);
//        $users = $res->ExampleUsers;
//        $users = ExampleUsers::findOrFail(5);
//      Eager loading example:  $res = ExampleUsers::with('roles')->all()
        // hasMany
//        $res = ExampleUsers::all()->paginate(1);
//        $users = $res;
//      Use pagination
        $res = ExampleUsers::paginate(1);
        $users = $res;
//        print_r($this);

        return view('home.about', compact('users'));
    }

    public function form(Request $request) {
        $this->validate($request, [
            'username' => 'required|string|max:255',
            'animal' => 'required|string|max:255',
        ]);
        
        $username = $request->username;
        $animal = $request->animal;
        
        return view('home.form', compact('username', 'animal'));
    }

}
