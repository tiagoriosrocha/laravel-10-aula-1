<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StringsController extends Controller
{
    public function paraMaiusculo($original){
    	$modificada = strtoupper($original);
    	return $modificada;
    }

    public function paraMaiusculoFormatada($original){
    	$modificada = strtoupper($original);
    	return view("exibirMaiusculo",["original" => $original, "modificada" => $modificada]);
    }

    public function paraArray($original){
    	$vetor = explode(" ",strtoupper($original));
    	return view("exibirPalavras",[ "original" => $original, "vetor" => $vetor ]);
    }

    /*
    Outros métodos para manipulação de string (procure mais na documentação do php):
	ucwords -> Retorna a string fornecida com todas as palavras iniciadas por letras maiúsculas
	strtolower -> Retorna a string fornecida com todas as letras maiúsculas.
	strtolower -> Retorna a string fornecida com todas as letras minúsculas.
	strrev -> Retorna a string fornecida invertida.
	shuffle -> Esta função “embaralha” o array, ou seja, troca as posições dos elementos aleatoriamente e não retorna valor algum.
	sort -> ordena o vetor de forma crescente
	rsort -> ordena o vetor de forma decrescente 
	*/
}
