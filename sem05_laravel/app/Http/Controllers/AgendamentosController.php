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
        return view('agendamento', ['agendamentos'=>$this->agendamentos->all()]);
    }

    public function show($id){
        return view('single-agendamento', ['agendamento'=>$this->agendamentos->find($id)]);
    }
}
