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

    public function editUser($id){
        $data = ['user' => Users::find($id)];
        return view('users/user_edit', $data);
    }

    public function updateUser(Request $request, $id){
        $updateUser = $request->all();
        if(!Users::find($id)->update($updateUser))
            dd("Erro ao atualizar usuário $id");
        return redirect('/users');
    }

    public function deleteUser($id){
        return view('users/user_remove', ['user' => Users::find($id)]);
    }

    public function removeUser(Request $request, $id){
        if($request->confirmar === "Deletar"){
            if(!Users::destroy($id)){
                dd("Erro ao deletar o usuário $id!");
            }
        }
        return redirect('/users');
    }

}
