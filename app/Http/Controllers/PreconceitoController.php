<?php

namespace App\Http\Controllers;

use App\Models\Preconceito;
use Illuminate\Http\Request;

class PreconceitoController extends Controller
{
    public function index() {
        $preconceitos = Preconceito::all();

        return view('welcome', ['preconceitos' => $preconceitos]);
    }

    public function criar() {
        return view('preconceitos.criar');
    }

    public function store(Request $request) {
        $preconceito = new Preconceito;

        $preconceito->title = $request->title;
        $preconceito->description = $request->description;

        $preconceito->save();

        return redirect('/')->with('msg', 'Preconceito criado com sucesso');
    }
}
