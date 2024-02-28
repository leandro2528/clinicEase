<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Agenda;
use App\Models\Convenio;

class AgendaController extends Controller
{
    public function index() {
        $agendas = Agenda::orderBy('id', 'desc')->with('convenio')->get();
        $convenios = Convenio::all();
        return view('agendas.index', ['agendas'=>$agendas, 'convenios'=>$convenios]);
    }

    public function create() {
        $agendas = Agenda::all();
        $convenios = Convenio::all();
        return view('agendas.create', ['agendas'=>$agendas, 'convenios'=>$convenios]);
   }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'convenio_id' => 'required',
            'data_hora' => 'required',
            'observacao' => 'required',
        ]);
        Agenda::create($request->all());
        $convenios = Convenio::all();
        return redirect()->route('agendas-index');
   }

    public function edit($id) {
        $agendas = Agenda::where('id', $id)->first();
        $convenios = Convenio::all();
        return view('agendas.edit', ['agendas'=>$agendas , 'convenios'=>$convenios]);
   }

    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'convenio_id' => $request->convenio_id,
            'data_hora' => $request->data_hora,
            'observacao' => $request->observacao
        ];
        $agendas = Agenda::where('id', $id)->update($data);
        return redirect()->route('agendas-index');
   }

    public function destroy($id) {
        $agendas = Agenda::where('id', $id)->delete();
        return redirect()->route('agendas-index');
   }
    
}
