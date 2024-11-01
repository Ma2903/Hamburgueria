<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HamburgueriaController extends Controller
{
    public function index()
    {
        $nome = " X-Salada ";
        $codigo = 25;
        return view('hamburgueria',['nome' => $nome,'codigo' => $codigo]);
    }
}
