@extends('layouts.main')

@section('title', 'Produto')

@section('content')
<h1>Ola</h1>
  @if($id != null)
    <p>Exibindo produto id: {{ $id }}</p>
  @endif
<a href="/">Voltar para home</a>
@endsection