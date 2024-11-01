<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UsuarioModel;

class UsuarioController extends Controller
{
    /*
    public function index()
    {
        //o método all pega todo o conteúdo da tabela usuarios
        $usuarioss = UsuarioModel::all();
        $nome="aaaaaaaaaaaaaa";
        dd( $nome);
        //dd($usuarioss);
        //dd($usuarioss);         vetorUsuarios
        return view('usuarios',['xxx'=>$usuarioss]);
       // return view('usuarios.index',['nomea'=>$nome]);
        //return view('usuarios.index');
    }
*/
    public function index()
    {
        dd('Olá mundo');
        $nome="aaaaaaaaaaaaaa";
        dd( $nome);
        return view('usuarios',['nomea'=>$nome]);
    }
    public function create()
    {
        return view('usuarios');
    }

    public function cadastrar(Request $request)
    {
        $usuario = new UsuarioModel();
        //objeto da classe Model é preenchido pelos dados do formulário da View
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();
        return redirect('usuarios');
    }

    public function verUsuarios(){
        $usuarios = UsuarioModel::all();
        return view('usuarios',['vetorUsuarios'=>$usuarios]);
    }

}
 /* 
 protected $fillable = [
        'nome',
        'email',
        'password'];        */