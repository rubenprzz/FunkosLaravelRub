@php use App\Models\Funko; @endphp
@extends('main')

@section('title', 'Funkos CRUD')

@section('content')
    <h1>Listado de Funkos</h1>


    <form action="{{ route('funkos.index') }}" class="mb-3" method="get">
        @csrf
        <div class="input-group">
            <input type="text" class="form-control" id="search" name="search" placeholder="Marca o Modelo">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </div>
    </form>

    @if (count($funkos) > 0)
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($funkos as $funko)
                <tr>
                    <td>{{ $funko->id }}</td>
                    <td>{{ $funko->modelo }}</td>
                    <td>{{ $funko->precio }}</td>
                    <td>{{ $funko->cantidad }}</td>

                    <td>
                        <a class="btn btn-primary btn-sm"
                           href="{{ route('funkos.show', $funko->id) }}">Detalles</a>
                        <a class="btn btn-secondary btn-sm"
                           href="{{ route('funkos.edit', $funko->id) }}">Editar</a>
                        <a class="btn btn-info  btn-sm"
                           href="{{ route('funkos.editImage', $funko->id) }}">Imagen</a>
                        <form action="{{ route('funkos.destroy', $funko->id) }}" method="POST"
                              style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Estás seguro de que deseas borrar este funko?')">Borrar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @else
        <p class='lead'><em>No se ha encontrado datos de funkos.</em></p>
    @endif


    <div class="pagination-container">
        {{ $funkos->links('pagination::bootstrap-4') }}
    </div>

    <a class="btn btn-success" href={{ route('funkos.create') }}>Nuevo Funko</a>

@endsection
