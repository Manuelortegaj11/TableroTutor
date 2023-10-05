@extends('home.index')




@section('content')
<style>
  .fixed-navbar {
    position: fixed;
    top: 0; /* Ajusta la posición vertical como desees */
    left: 0; /* Ajusta la posición horizontal como desees */
    width: 100%; /* Ocupará todo el ancho de la ventana */
    z-index: 999; /* Ajusta la elevación según sea necesario */
  }
</style>
<style>
  .middle-section {
    position: relative;
    top: 100%; /* Coloca la sección en el centro vertical de la pantalla */
    transform: translateY( 35%); /* Ajusta la posición vertical para que esté centrada */
    left: 0; /* Ajusta la posición horizontal según sea necesario */
    width: 100%; /* Ocupará todo el ancho de la pantalla */
    text-align: center
  }
  @media (max-width: 967px) {
    .middle-section-mobile {
      position: relative;
      top: auto;
      transform: translateY(0);
      margin-top: 25%;
      bottom: 0; /* Coloca la sección en la parte inferior de la pantalla */
    }
}
</style>



<section class="bg-neutral-200 dark:bg-neutral-200 min-h-screen">
  <div class="middle-section middle-section-mobile py-8 px-4">
    <div class="container mx-auto">
        <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800 dark:text-neutral-200">
            <div class="w-full justify-center ">
                <div class="block rounded-lg bg-white shadow-lg dark:bg-white">

                    <header class="bg-unimagBlue p-4 text-white">
                        <h1 class="text-3xl font-bold justify-center">Services</h1>
                    </header>

<section class="p-12">

<div class="flex flex-wrap -mx-12">

<!-- Servicio 1 -->
<div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-4">
    <div class="bg-gray-200 text-black p-6 rounded-lg shadow">
        <h2 class="flex items-center">
            <a href="/formularios/create" class="flex items-center text-xl font-semibold mb-2">
                <svg width="30px" height="30px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <rect fill="none" height="6" rx="2" width="34" x="33" y="50"/>
                    <rect fill="none" height="6" rx="2" width="30" x="33" y="62"/>
                    <g>
                        <path d="m63 36h10.6a1.37 1.37 0 0 0 1.4-1.4 1.28 1.28 0 0 0 -.4-1l-13.2-13.2a1.28 1.28 0 0 0 -1-.4 1.37 1.37 0 0 0 -1.4 1.4v10.6a4 4 0 0 0 4 4z"/>
                        <path d="m73 42h-14a6 6 0 0 1 -6-6v-14a2 2 0 0 0 -2-2h-20a6 6 0 0 0 -6 6v48a6 6 0 0 0 6 6h38a6 6 0 0 0 6-6v-30a2 2 0 0 0 -2-2zm-40-2a2 2 0 0 1 2-2h8.18a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-8.18a1.94 1.94 0 0 1 -2-2zm30 26a2 2 0 0 1 -2 2h-26a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h26a2 2 0 0 1 2 2zm4-12a2 2 0 0 1 -2 2h-30a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h30a2 2 0 0 1 2 2z"/>
                    </g>
                </svg>
                Antes del grado
            </a>
        </h2>

        <p class="text-unimagBlue2">Formulario antes del grado Etiam auctor, libero a scelerisque interdum, ipsum mi suscipit odio, ut vehicula tortor justo nec libero. Pellentesque at dui nec ante dignissim convallis non vel odio.</p>
    </div>
</div>


            <!-- Servicio 2 -->

<div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-4">
    <div class="bg-gray-200 text-black p-6 rounded-lg shadow">
        <h2 class="flex items-center">
            <a href="URL_DEL_ENLACE" class="flex items-center text-xl font-semibold mb-2">
                <svg width="30px" height="30px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <rect fill="none" height="6" rx="2" width="34" x="33" y="50"/>
                    <rect fill="none" height="6" rx="2" width="30" x="33" y="62"/>
                    <g>
                        <path d="m63 36h10.6a1.37 1.37 0 0 0 1.4-1.4 1.28 1.28 0 0 0 -.4-1l-13.2-13.2a1.28 1.28 0 0 0 -1-.4 1.37 1.37 0 0 0 -1.4 1.4v10.6a4 4 0 0 0 4 4z"/>
                        <path d="m73 42h-14a6 6 0 0 1 -6-6v-14a2 2 0 0 0 -2-2h-20a6 6 0 0 0 -6 6v48a6 6 0 0 0 6 6h38a6 6 0 0 0 6-6v-30a2 2 0 0 0 -2-2zm-40-2a2 2 0 0 1 2-2h8.18a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-8.18a1.94 1.94 0 0 1 -2-2zm30 26a2 2 0 0 1 -2 2h-26a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h26a2 2 0 0 1 2 2zm4-12a2 2 0 0 1 -2 2h-30a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h30a2 2 0 0 1 2 2z"/>
                    </g>
                </svg>
                E1
            </a>
        </h2>
        <p class="text-unimagBlue2">Formulario E1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec euismod, erat eget laoreet dictum, ligula quam cursus libero, a eleifend dolor libero eu turpis.</p>
    </div>
</div>
            <!-- Servicio 3 -->
<div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-4">
    <div class="bg-gray-200 text-black p-6 rounded-lg shadow">
        <h2 class="flex items-center">
            <a href="URL_DEL_ENLACE" class="flex items-center text-xl font-semibold mb-2">
                <svg width="30px" height="30px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <rect fill="none" height="6" rx="2" width="34" x="33" y="50"/>
                    <rect fill="none" height="6" rx="2" width="30" x="33" y="62"/>
                    <g>
                        <path d="m63 36h10.6a1.37 1.37 0 0 0 1.4-1.4 1.28 1.28 0 0 0 -.4-1l-13.2-13.2a1.28 1.28 0 0 0 -1-.4 1.37 1.37 0 0 0 -1.4 1.4v10.6a4 4 0 0 0 4 4z"/>
                        <path d="m73 42h-14a6 6 0 0 1 -6-6v-14a2 2 0 0 0 -2-2h-20a6 6 0 0 0 -6 6v48a6 6 0 0 0 6 6h38a6 6 0 0 0 6-6v-30a2 2 0 0 0 -2-2zm-40-2a2 2 0 0 1 2-2h8.18a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-8.18a1.94 1.94 0 0 1 -2-2zm30 26a2 2 0 0 1 -2 2h-26a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h26a2 2 0 0 1 2 2zm4-12a2 2 0 0 1 -2 2h-30a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h30a2 2 0 0 1 2 2z"/>
                    </g>
                </svg>
                E2
            </a>
        </h2>
        <p class="text-unimagBlue2">Formulario E2 Etiam auctor, libero a scelerisque interdum, ipsum mi suscipit odio, ut vehicula tortor justo nec libero. Pellentesque at dui nec ante dignissim convallis non vel odio.</p>
    </div>
</div>

<div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-4">
    <div class="bg-gray-200 text-black p-6 rounded-lg shadow">
        <h2 class="flex items-center">
            <a href="URL_DEL_ENLACE" class="flex items-center text-xl font-semibold mb-2">
                <svg width="30px" height="30px" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                    <rect fill="none" height="6" rx="2" width="34" x="33" y="50"/>
                    <rect fill="none" height="6" rx="2" width="30" x="33" y="62"/>
                    <g>
                        <path d="m63 36h10.6a1.37 1.37 0 0 0 1.4-1.4 1.28 1.28 0 0 0 -.4-1l-13.2-13.2a1.28 1.28 0 0 0 -1-.4 1.37 1.37 0 0 0 -1.4 1.4v10.6a4 4 0 0 0 4 4z"/>
                        <path d="m73 42h-14a6 6 0 0 1 -6-6v-14a2 2 0 0 0 -2-2h-20a6 6 0 0 0 -6 6v48a6 6 0 0 0 6 6h38a6 6 0 0 0 6-6v-30a2 2 0 0 0 -2-2zm-40-2a2 2 0 0 1 2-2h8.18a2 2 0 0 1 2 2v2a2 2 0 0 1 -2 2h-8.18a1.94 1.94 0 0 1 -2-2zm30 26a2 2 0 0 1 -2 2h-26a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h26a2 2 0 0 1 2 2zm4-12a2 2 0 0 1 -2 2h-30a2 2 0 0 1 -2-2v-2a2 2 0 0 1 2-2h30a2 2 0 0 1 2 2z"/>
                    </g>
                </svg>
                E3
            </a>
        </h2>
        <p class="text-unimagBlue2">Formulario E1 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Donec euismod, erat eget laoreet dictum, ligula quam cursus libero, a eleifend dolor libero eu turpis.</p>
    </div>
</div>

        </div>
</section>
</div>
</div>
</div>
</div>
  </div>
</section>

@endsection



