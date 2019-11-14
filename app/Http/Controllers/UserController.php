<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;

class UserController extends Controller
{
    //
    public function index(){


        $users = User::all();


        $companies = Company::all();


        return view('users.index', compact('users', 'companies') );

    }

    public function create(){

        $companies = Company::all();
        /** Down below: Empty User array in order to avoid error */
        $user = new User();


        return view('users.create', compact('companies', 'user'));

    }

    public function store(){

        User::create($this->requestValidate());

        return redirect('users');

    }

    public function show(User $user){


        /* $user = User::findOrFail($user); */ //Not needed since we are using ROUTE MODEL BINDING

        return view('users.show', compact('user'));

    }

    public function edit(User $user){

        $companies = Company::all();
        return view('users.edit', compact('user', 'companies'));

    }

    public function update(User $user){ //ROUTE MODEL BINDING

        /* dd($user); */
        $user->update($this->requestValidate());

        return redirect('/users/' . $user->id);

    }

    private function requestValidate(){
        return request()->validate([
            'name' => 'required|min:4',
            'status' => 'required',
            'email' => 'required|email',
            'company_id' => 'required'
        ]);
    }

}
