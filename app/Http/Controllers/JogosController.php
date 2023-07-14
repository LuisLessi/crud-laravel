<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index() 
    {
        $jogos = Jogo::all();
       //dd($jogos);
       return view('jogos.index', ['jogos'=>$jogos]);
    }

    public function create()
    {
        return view('jogos.create');
    }

    public function store(Request $request){
        Jogo::create($request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id){
        $jogo = Jogo::find($id);
        if (!empty($jogo)) {
        return view('jogos.edit', ['jogo' => $jogo]);
        } else {
            return redirect()->route('jogos-index');
        }
        
    }

    public function update(Request $request, $id){
        $jogo = Jogo::find($id);
        $jogo->update($request->all());
        return redirect()->route('jogos-index');
    }

    public function destroy($id) {
        $jogo = Jogo::find($id);
        if ($jogo) {
            $jogo->delete();
        }
        return redirect()->route('jogos-index');
    }
    
    
    
}
