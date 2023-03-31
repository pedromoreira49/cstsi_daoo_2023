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
        return view('produtos/produto', ['produtos'=>$this->produtos->all()]);
        //return response()->json($this->produto->all());
    }

    public function show($id){
        return view('produtos/single-produto', ['produto'=>$this->produtos->find($id)]);
        //return response()->json($this->produtos->find($id));
    }

    public function create(){
        return view('produtos/produto_create');
    }   

    public function store(Request $request){
        $produto = new Produto;
        $array_input_request = $request->all();
        $produto->fill($array_input_request);
        $produto->importado = ($request->importado)?true:false;

        if($produto->save()){
            return redirect('/produtos');
        }else{
            dd("Erro ao inserir produto");
        }
    }

    public function update(Request $request, $id){
        $updateProduto = $request->all();
        $updateProduto['importado'] = ($request->importado)?true:false;
        if(!Produto::find($id)->update($updateProduto))
            dd("Erro ao atualizar produto $id");
        return redirect('/produtos');
    }

    public function edit($id){
        $data = ['produto' => Produto::find($id)];
        return view('produtos/produto_edit', $data);
    }

    public function delete($id){
        return view('produtos/produto_remove', ['produto' => Produto::find($id)]);
    }

    public function remove(Request $request, $id){
        if($request->confirmar === "Deletar"){
            if(!Produto::destroy($id)){
                dd("Erro ao deletar o produto $id!");
            }
        }
        return redirect('/produtos');
    }

}
