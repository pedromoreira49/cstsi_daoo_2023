<?php

namespace App\Http\Controllers;

use App\Models\Helpers;
use Illuminate\Http\Request;

class HelpersController extends Controller
{
    private $helper;

    public function __construct(){
        $this->helper = new Helpers();
    }

    public function index(){
        return view('helpers/helper', ['helpers'=>$this->helper->all()]);
    }

    public function show($id){
        return view('helpers/single-helper', ['helper'=>$this->helper->find($id)]);
    }

    public function createHelper(){
        return view('helpers/helper_create');
    }   

    public function storeHelper(Request $request){
        $helper = new Helpers;
        $array_input_request = $request->all();
        $helper->fill($array_input_request);

        if($helper->save()){
            return redirect('/helpers');
        }else{
            dd("Erro ao cadastrar ajudante!");
        }
    }

    public function editHelper($id){
        $data = ['helper' => Helpers::find($id)];
        return view('helpers/helper_edit', $data);
    }

    public function updateHelper(Request $request, $id){
        $updateHelper = $request->all();
        if(!Helpers::find($id)->update($updateHelper))
            dd("Erro ao atualizar ajudante $id");
        return redirect('/helpers');
    }

}
