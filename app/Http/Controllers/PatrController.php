<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Foro;
use App\Models\User;

class PatrController extends Controller
{
    public function index(){

        $foros = Foro::all();

        return view('welcome', ['foros' => $foros]);
    }

    public function create(){

        $foros = Foro::all();

        return view('events.create', ['foros' => $foros]);
    }

    public function store(Request $resquest) {

        $foros = new Foro;

        $foros->descricao = $resquest->descricao;
        $foros->patrimonio_local = $resquest->patrimonio_local;
        $foros->cep = $resquest->cep;
        $foros->rua = $resquest->rua;
        $foros->numero = $resquest->numero;
        $foros->complemento = $resquest->complemento;
        $foros->bairro = $resquest->bairro;
        $foros->cidade = $resquest->cidade;
        $foros->pagamento = $resquest->pagamento;
        $foros->recebido = $resquest->recebido;

        $foros->save();

        return redirect('/events/create')->with('msg', 'Foro cadastrado com sucesso!');

    }

    public function show($id) {

        $foros = Foro::findOrFail($id);


        return view('events.show', ['foro' => $foros]);

    }

    public function cadastro_enfiteuta(){

        return view('events.cadastro_enfiteuta');
    }


}


