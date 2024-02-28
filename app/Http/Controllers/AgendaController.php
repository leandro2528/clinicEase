<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Agenda;

class AgendaController extends Controller
{
    public function index() {
        $agendas = Agenda::orderBy('id', 'desc')->get();
        return view('agendas.index', ['agendas'=>$agendas]);
    }

    public function create() {
        $agendas = Agenda::all();
        return view('agendas.create', ['agendas'=>$agendas]);
   }

    public function store(Request $request) {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'convenio' => 'required',
            'data_hora' => 'required',
            'observacao' => 'required',
        ]);
        Agenda::create($request->all());
        return redirect()->route('agendas-index');
   }

    public function edit($id) {
        $agendas = Agenda::where('id', $id)->first();
        return view('agendas.edit', ['agendas'=>$agendas]);
   }

    public function update(Request $request, $id) {
        $data = [
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'convenio' => $request->convenio,
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
