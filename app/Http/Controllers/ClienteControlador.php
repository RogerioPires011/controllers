<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{

    
    public function index()
    {
        return "Listas de todos os Cliente- Raiz";
    }

    
    public function create()
    {
        return "Formulario para cadastrar novo Cliente";
    }

   
    public function store(Request $request)
    {
        $s="Armazenar:";
        $s .="Nome: ".$request->input('nome') ." e ";
        $s .="Idade: ".$request->input('idade');
        return response ($s,201);
    }

    public function show($id)
    {
        $v=["Mario","Edson","Roberto","Jean"];
        if($id >=0 && $id <count($v))
            return$v[$id];
        return"Nao Encontrado";
    }

    public function edit($id)
    {
        return"Formulario para editar Clientes ID " .$id;
    }

    
    public function update(Request $request, $id)
    {
        $s="Atualizar cliente com id $id: ";
        $s .="Nome: ".$request->input('nome') ." e ";
        $s .="Idade: ".$request->input('idade');
        return response ($s,200);
    }

    
    public function destroy($id)
    {
        return response("Apagando clinte com id $id",200); 
    }


     public function requisitar(Request $request){
        echo"nome: " . $request->input('nome'); 
     }
}