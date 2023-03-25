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
        return view('helper', ['helpers'=>$this->helper->all()]);
    }

    public function show($id){
        return view('helper', ['helper'=>$this->helper->find($id)]);
    }

}
