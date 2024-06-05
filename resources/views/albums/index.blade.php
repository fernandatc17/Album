@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between  border-bottom mt-3  mb-3">   
	<h2>Álbumes</h2>
	<div >
    	<a class="btn btn-primary" href="/albums/create">Nuevo</a>
	</div>
</div>
<table class="table">
	<thead>
    	<tr>
        	<th>Nombre</th>
        	<th>Usuario</th>
        	<th>Id</th>
        	<th class="text-center">Acciones</th>
    	</tr>
	</thead>
	<tbody>
    	@foreach($albums as $fila)
    	<tr>
        	<td>{{ $fila->album_nombre }}</td>
        	<td>{{ $fila->usuario->nombre }}</td>
        	<td>{{ $fila->album_id }}</td>
        	<td class="text-center">
            	<a class="btn btn-secondary" href="/albums/edit/{{ $fila->album_id }}">
                	<i class="bi bi-pencil-square"></i>
            	</a>
            	<a class="btn btn-danger" href="/albums/delete/{{ $fila->album_id }}">
                	<i class="bi bi-trash"></i>
            	</a>
        	</td>
    	</tr>
    	@endforeach
	</tbody>
</table>
@endsection

