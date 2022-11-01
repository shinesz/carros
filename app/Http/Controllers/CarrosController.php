<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Carros;

class CarrosController extends Controller
{
    public function FormularioCadastroCarro(){
        return view('cadastrarCarro');
    }

    public function EditarCarro(){
        return view('editarCarro');
    }

    public function MostrarEditarCarro(Request $request){
      
        //$dadosCarro = Carros::all();
        //dd($dadosCarro);
       
        $dadosCarro = Carros::query();
        $dadosCarro->when($request->marca,function($query, $vl){
            $query-> where('marca', 'like','%'.$vl.'%');
        });

        $dadosCarro = $dadosCarro->get();
        return view('editarCarro',['registrosCarro' => $dadosCarro]);

    }

    

    public function SalvarBancoCarro(Request $request){
        $dadosCarros = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);
        
        Carros::create($dadosCarros);

        return Redirect::route('home');
    }

    public function destroy($id){
        Carros::findOrfail($id)-> delete();
        return Redirect::route('editar-carro');
    }
    
    public function edit($id){
        $carros= Carros::findOrfail($id);
        return view('edit',['carros' => $carros]);
    }


    public function update(Request $request){
        Carros::findOrfail( $request->id)->update($request->all());
        return Redirect::route('editar-carro');

}

} 