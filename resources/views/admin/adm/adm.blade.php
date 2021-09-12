@extends('admin.layouts.admLayout')

@section('menu-content')
    <h1>Painel Administrativo</h1>
@endsection


@section('form-cadastro')
    <form class="form-add" action="{{route('site.salvar')}}" enctype="multipart/form-data" method="POST">

        @csrf

        <label for="image">Foto:</label>
        <input type="file" name="image" id="image">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" placeholder="Digite o nome do cliente..." required>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" placeholder="Digite a idade do cliente..." required>
        <label for="nivel">Nível de atendimento:</label>
        <select name="nivel" id="nivel" required>
            <option value="Verde">Verde</option>
            <option value="Azul">Azul</option>
            <option value="Amarelo">Amarelo</option>
            <option value="Laranja">Laranja</option>
            <option value="Vermelho">Vermelho</option>
        </select>
        <button>Adicionar cliente</button>
    </form>
@endsection

@section('list-clientes')

    <input class="search" type="search" name="search" id="search" placeholder="Buscar cliente">

    <table cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Foto</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nível</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($customers as $customer)
                <tr>
                    <td><img class="img-perfil" src='storage/customers/{{$customer->image}}' alt="Foto de perfil"></td>
                    <td>{{$customer->nome}}</td>
                    <td>{{$customer->idade}}</td>
                    <td>{{$customer->nivel}}</td>
                    <td>
                        <form action="{{route('site.deletar', $customer->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="excluir">Excluir</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><p>Não há clientes cadastrados.</p></tr>
            @endforelse

        </tbody>
    </table>
@endsection
