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
        return view('users', ['users'=>$this->users->all()]);
    }

    public function show($id){
        return view('single-user', ['user'=>$this->users->find($id)]);
    }
}
