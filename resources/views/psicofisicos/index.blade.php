@extends('layouts.psicofisicos')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 - Psicofisicos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('psicofisicos.create') }}">Registrar Psicofisico</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>N°</th>
            <th>Fecha de Realización</th>
            <th>Con Sobre</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($psicofisicos as $psicofisico )
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $psicofisico->fecha_realizacion }}</td>
            <td>{{ $psicofisico->con_sobre }}</td>
            <td>
                <form action="{{ route('psicofisicos.destroy',$psicofisico->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('psicofisicos.show',$psicofisico->id) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('psicofisicos.edit',$psicofisico->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $psicofisicos->links() !!}
      
@endsection