<?php

namespace App\Http\Controllers;

use App\Models\Agendamentos;
use Illuminate\Http\Request;

class AgendamentosController extends Controller
{
    private $agendamentos;

    public function __construct(){
        $this->agendamentos = new Agendamentos();
    }

    public function index(){
        return view('agendamentos/agendamentos', ['agendamentos'=>$this->agendamentos->all()]);
    }

    public function show($id){
        return view('agendamentos/single-agendamento', ['agendamento'=>$this->agendamentos->find($id)]);
    }

    public function createAgendamento(){
        return view('agendamentos/agendamento_create');
    }   

    public function storeAgendamento(Request $request){
        $agendamento = new Agendamentos;
        $array_input_request = $request->all();
        $agendamento->fill($array_input_request);

        if($agendamento->save()){
            return redirect('/agendamentos');
        }else{
            dd("Erro ao cadastrar agendamento!");
        }
    }
}
