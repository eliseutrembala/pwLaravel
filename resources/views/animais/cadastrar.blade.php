{{-- views/animais/cadastrar.blade.php --}}

@extends('base')

@section('titulo', 'Cadastrar | Animais para adoção')

@section('conteudo')
<p>Preencha o formulário</p>

@if($errors->any())
<div>
    <h4>Deu ruim</h4>
    @foreach($errors->all() as $erro)
        <p>{{ $erro }}</p>
    @endforeach
</div>  
@endif

<form method="post" action="{{ route('animais.gravar') }}">
    @csrf
    <div class="">
        <label class="block text-sm text-gray-600" for="nome">Nome</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="nome" name="nome" type="text"  placeholder="nome" value="{{ old('nome') }}">
    </div>
    <div class="mt-2">
        <label class="block text-sm text-gray-600" for="idade">Idade</label>
        <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="idade" value="{{ old('idade') }}" name="idade" type="number"  placeholder="Idade" aria-label="idade">
    </div>
    <div class="mt-6">
        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit" value="Gravar">Gravar</button>
    </div>
</form>
@endsection