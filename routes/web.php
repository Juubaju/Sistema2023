<?php

use App\Models\agendamentos;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $primeiroRegistro = new agendamentos;
    $primeiroRegistro->nome = "Rodrigo Alves";
    $primeiroRegistro->telefone = "11985229966";
    $primeiroRegistro->origem = "Whatsapp";
    $primeiroRegistro->data_contato = "2023-03-28";
    $primeiroRegistro->observacao = "entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação 
    e instalação do sistema operacional windows 10";
    $primeiroRegistro->save();

    return view('welcome');
});
