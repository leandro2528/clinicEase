<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;

class DashboardController extends Controller
{
    public function index() {
        $agendas = Agenda::orderBy('id', 'desc')->get();

        $totalAgendas = Agenda::count();
        return view('dashboards.index', ['agendas'=>$agendas, 'totalAgendas'=>$totalAgendas]);
    }
}
