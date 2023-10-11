@extends('home.layout')
@section('content')

<section class=" gradient-form h-full bg-neutral-200 dark:bg-neutral-200 min-h-screen">
   <button id="openModalBtn">Abrir Ventana Emergente</button>
<form action ="{{ url('/listado-proximo-graduado/'.$formulario->id) }}" method="post">
@csrf
{{ method_field('PATCH')  }}
@include('antesdelgrado.index',['modo'=>'Editar'])
</form>
</section>
@endsection
