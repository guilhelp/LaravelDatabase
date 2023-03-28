<?php
use App\models\Agendamentos;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dados', function () {
    $primeiroRegistro = new Agendamentos;
    $primeiroRegistro-> nome = "Guilherme";
    $primeiroRegistro-> telefone = "(11)94762-7611";
    $primeiroRegistro-> origem = "Instagram";
    $primeiroRegistro-> data_contato = "2023-02-23";
    $primeiroRegistro-> observacao = "Cliente solicitando contato com banco de dados";
    $primeiroRegistro-> save();
    $segundoRegistro = new Agendamentos;
    $segundoRegistro-> nome = "Rodrigo Alves";
    $segundoRegistro-> telefone = "(11)98522-9966";
    $segundoRegistro-> origem = "Whatsapp";
    $segundoRegistro-> data_contato = "2023-03-28";
    $segundoRegistro-> observacao = "Entrou em contato no dia 10.03.2023 interessado em um orçamento para formatação e instalação do Sistema Operacional Windows 10";
    $segundoRegistro-> save();
    return view('dados');
});
