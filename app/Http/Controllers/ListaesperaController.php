<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Convenio;
use App\Models\Listaespera;

class ListaesperaController extends Controller
{
    public function index() {
        $listaesperas = Listaespera::with('agenda', 'convenio')->get();
        $agendas = Agenda::all();
        $convenios = Convenio::all();
        return view('listaesperas.index', [
            'listaesperas'=>$listaesperas,
            'agendas'=>$agendas,
            'convenios'=>$convenios
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'agenda_id' => 'required',
            'convenio_id' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'observacao' => 'required'
        ]);
        Listaespera::create($request->all());
        return redirect()->route('listaesperas-index');
    }
}
