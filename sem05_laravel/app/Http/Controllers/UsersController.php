<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    private $users;

    public function __construct(){
        $this->users = new Users();
    }

    public function index(){
        return view('users/users', ['users'=>$this->users->all()]);
    }

    public function show($id){
        return view('users/single-user', ['user'=>$this->users->find($id)]);
    }

    public function createUser(){
        return view('users/user_create');
    }   

    public function storeUser(Request $request){
        $user = new Users;
        $array_input_request = $request->all();
        $user->fill($array_input_request);

        if($user->save()){
            return redirect('/users');
        }else{
            dd("Erro ao cadastrar usuários!");
        }
    }
}
