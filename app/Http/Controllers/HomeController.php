<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests;
use App\models\ExampleUsers;
use App\models\Roles;

class HomeController extends Controller {

    public function about(Request $request) {
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
        // Session handling
        $request->session()->put('name', 'value');
        $request->session()->get('name');

        return view('home.about', compact('users'));
    }

    public function form(Request $request) {
        // Simple method
//        $this->validate($request, [
//            'username' => 'required|string|max:255',
//            'animal' => 'required|string|max:255',
//        ]);
// It is the preferred method because it allows access to each single error report (see about.blade)
        $validator = Validator::make($request->all(), [
                    'username' => 'required|string|max:255',
                    'sername' => 'required|string|max:255',
                    'animal' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect('about')
                            ->withErrors($validator)
                            ->withInput();
        }

        $username = $request->username;
        $animal = $request->animal;

        return view('home.form', compact('username', 'animal'));
    }

    protected function formatErrors(Validator $validator) {
        return $validator->errors()->all();
    }

}
