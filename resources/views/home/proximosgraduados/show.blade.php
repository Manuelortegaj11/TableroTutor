@extends('home.nav_content_footer.layout')

@section('content')
    <section class="gradient-form h-full bg-neutral-200 dark:bg-neutral-200 min-h-screen">
        <button id="openModalBtn">Abrir Ventana Emergente</button>
        <form action="{{ url('/listado-proximo-graduado/') }}" method="get">
            @csrf
            @include('home.formularios.antesdelgrado.index', ['modo' => 'Regresar', 'readonly' => true])
        </form>
    </section>
@endsection

