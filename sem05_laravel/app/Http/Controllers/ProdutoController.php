<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{

    private $produtos;

    public function __construct(){
        $this->produtos = new Produto();
    }

    public function index(){
        return view('produto', ['produtos'=>$this->produtos->all()]);
        //return response()->json($this->produto->all());
    }

    public function show($id){
        return view('single-produto', ['produto'=>$this->produtos->find($id)]);
        //return response()->json($this->produtos->find($id));
    }
}
