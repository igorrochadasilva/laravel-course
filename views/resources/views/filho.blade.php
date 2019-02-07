@extends('layouts.app')


@section('titulo','Minha página - Filho')

@section('barralateral')
<p>Esta parte é do FILHO</p>
@parent 
@endsection

@section('conteudo')
<p>Este é o conteudo do filho</p>
@endsection