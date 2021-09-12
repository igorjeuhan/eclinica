@extends('admin.layouts.principalLayout')

@section('menu-content')
    <h1>E-clinica</h1>
    <ul>
        <li>Início</li>
        <li>Sobre</li>
        <li>Contato</li>
    </ul>
@endsection

@section('cabecalho-content')
    <section class="cabecalho-itens">
        <div class="cabecalho-text">
            <h1>Sua saúde é a nossa prioridade.</h1>
            <h3>E-clinica, sua clínica de atendimento especializado em qualquer lugar.</h3>
            <button>Solicitar um plano agora</button>
        </div>
        <div class="cabecalho-image">
            <img src="images/doctor.jpg" alt="Imagem de um médico">
        </div>
    </section>
@endsection

@section('sobre-content')
    <div class="sobre-text">
        <h1>Sobre</h1>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dicta minus ea sit
            consequuntur illo nihil, sed ullam laudantium voluptates temporibus beatae recusandae
            repudiandae, et eos veniam similique! Consequuntur, nesciunt.
        </p>
    </div>
@endsection

@section('clientes-content')
<h1>Clientes</h1>
    <div class="clientes-cards">
        @forelse ($customers as $customer)
            <div class="card">
                <img src="images/perfil/igor.jpg" alt="Imagem de perfil do cliente.">
                <h2>{{$customer->nome}}</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem dicta minus ea sit
                    consequuntur illo nihil.
                </p>
            </div>
        @empty
            <p>Não há clientes cadastrados.</p>
        @endforelse

    </div>
@endsection

@section('contato-content')
    <div class="form-contato">
        <h1>Contato</h1>
        <form action="#">
            <label for="nome">Nome:</label>
            <input type="text" placeholder="Digite seu nome...">
            <label for="email">E-mail:</label>
            <input type="email" placeholder="Digite seu email...">
            <label for="telefone">Telefone:</label>
            <input type="number" placeholder="Digite seu telefone...">
            <button>Enviar</button>
        </form>
    </div>
@endsection

@section('rodape-content')
    <div class="rodape-text">
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo dignissimos molesti</p>
    </div>
@endsection
