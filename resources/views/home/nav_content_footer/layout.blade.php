<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-oC1lgQxV0LL5qqTn6eNP6uUZCS9ck8okgMOF1qLGm1oZ+2mBAQQ7Tkj5KJo5qtHT" crossorigin="anonymous">
    @vite('resources/css/app.css')
<style>
        #menu-icon.active {
            animation: spin 0.5s forwards;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(90deg);
            }
        }

</style>
<style>
  ul.text-left.px-4.text-white {
    position: relative;
  }

  ul.text-left.px-4.text-white li {
    padding-bottom: 0px; /* Espacio para la línea */
  }

  ul.text-left.px-4.text-white li:nth-child(2)::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0%;
    transform: translateX(0%);
    width: 1px; /* Grosor de la línea */
    height: 100%; /* Altura de la línea */
    background-color: #c08e2d; /* Color de la línea */
  }
</style>
<style>
  .border-right {
    border-right: 0.5px solid rgba(255,255,255,.35); /* Color y grosor de la línea */
    margin-right: 10px; /* Espacio entre la línea y la imagen */
    padding-right: 16px; /* Espacio entre la línea y el contenido dentro de la imagen */
    }
  @media (max-width: 767px) {
    .border-right-mobile {
      border-right: none; /* Elimina el borde en dispositivos móviles */
      margin-right: 0; /* Elimina el margen derecho en dispositivos móviles */
      padding-right: 0; /* Elimina el espacio entre el borde y el contenido en dispositivos móviles */
    }
  }
</style>



</head>

<body>
    <nav class="bg-unimagBlue fixed-navbar">
    <nav class="footer p-0.5 bg-unimagBlue2 text-base-content">

<div class="flex md:justify-end justify-center">
    <a href="https://www.gov.co" class="" title="Ir a GOV.CO" rel="noopener noreferrer" target="_blank">
        <img src="https://www.gov.co/uploads/53cb9900-1f6d-4d95-81a1-02e02efbe3be.svg" alt="Logo de GOV.CO" class="w-15 h-6" />
        <span class="sr-only">Ir a GOV.CO</span>
    </a>
      <a href="#!" class="mr-4 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>
      </a>
      <a href="#!" class="mr-4 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
      </a>
      <a href="#!" class="mr-4 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-5 w-5"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
            fill-rule="evenodd"
            clip-rule="evenodd" />
        </svg>
      </a>
      <a href="#!" class="mr-4 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
      </a>
      <a href="#!" class="mr-4 text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
        </svg>
      </a>
      <a href="#!" class="text-neutral-600 dark:text-neutral-200">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
        </svg>
      </a>
        </div>
</nav>

        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white flex items-center">
                <!--<img src="{{ asset('unimagdefault.png') }}" alt="Logo" class="h-20 mr-2">-->
                <img src="https://cdn.unimagdalena.edu.co/images/escudo/bg_dark/default.png" alt="Logo" class="h-20 mr-2">

                <span class="text-1xl font-sans">TABLERO</span>
    <br>
                <span class="text-2xl font-bold"> TUTOR</span>
            </a>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="menu-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M4 18h16a1 1 0 010 2H4a1 1 0 010-2zm0-6h16a1 1 0 010 2H4a1 1 0 010-2zm0-6h16a1 1 0 010 2H4a1 1 0 010-2z" />
                    </svg>
                </button>
                <ul id="mobile-menu" class="hidden bg-unimagBlue text-white absolute w-full mt-6 left-0">
                    <li class="block px-4 py-2 border-b-2 dark:hover:bg-unimagOrange border-white-500"><a href="/formularios">Diligenciar Formulario</a></li>
                    <li class="block px-4 py-2 border-b-2 dark:hover:bg-unimagOrange border-white-500"><a href="/listado-proximo-graduado/">Lista de Próximos Graduados</a></li>
                    <li class="block px-4 py-2 border-b-2 dark:hover:bg-unimagOrange border-unimagOrange"><a href="/lista-egresados">Lista de Egresados</a></li>
                </ul>
            </div>

            <ul class="hidden md:flex space-x-3 text-white">
                <li>
                    <div class="relative group">

<button class="group relative h-12 w-48 overflow-hidden rounded-lg bg-unimagBlue text-lg shadow">
    <div class="absolute inset-0 w-3 bg-unimagOrange transition-all duration-[250ms] ease-out group-hover:w-full"></div>
    <span class="relative text-white group-hover:text-black">Formularios</span>
    <svg class="w-5 h-5 absolute top-1/2 right-4 transform -translate-y-1/2 fill-current text-black group-hover:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
        <path class="arrow" d="M12 8.59l1.41 1.41 4.59-4.59 1.41 1.41-6 6a1 1 0 0 1-1.41 0l-6-6 1.41-1.41 4.59 4.59z"/>
    </svg>
  </button>
                        <ul class="hidden absolute bg-unimagBlue text-white mt-2 space-y-2 left-0">
                            <li class="block px-4 py-2 dark:hover:bg-unimagOrange dark:hover:text-white border-b-2 border-white-700"><a href="/formularios">Diligenciar Formulario</a></li>
                            <li class="block px-4 py-2 dark:hover:bg-unimagOrange dark:hover:text-white border-b-2 border-white-700"><a href="/listado-proximo-graduado">Lista de Próximos Graduados</a></li>
                            <li class="block px-4 py-2 dark:hover:bg-unimagOrange dark:hover:text-white border-b-2 border-unimagOrange"><a href="/lista-egresados">Lista de Egresados</a></li>
                       </ul>
                    </div>
                </li>
            </ul>
        </div>

<div class="border-t-2 border-unimagOrange"></div>
    </nav>


    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        const dropdownButton = document.querySelector('.relative button');
        const dropdownMenu = document.querySelector('.relative ul');

        dropdownButton.addEventListener('click', () => {
            dropdownMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', (e) => {
            if (!dropdownButton.contains(e.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
        const menuIcon = document.getElementById('menu-icon');

            menuIcon.addEventListener('click', () => {
            menuIcon.classList.toggle('active');
        });
    </script>

    <!-- Línea naranja -->
        @yield('content')
<div class="border-t-2 border-unimagOrange"></div>
</body>

<!--<footer class="bg-unimagBlue text-white p-6">
    <div class="flex justify-center space-x-4">
        <button class="bg-white text-blue-700 hover:bg-unimagBlue hover:text-white px-4 py-2 rounded-md transition duration-300 ease-in-out">Botón 1</button>
        <button class="bg-white text-blue-700 hover:bg-unimagBlue hover:text-white px-4 py-2 rounded-md transition duration-300 ease-in-out">Botón 2</button>
    </div>
</footer>
-->
<footer class="">
<div class="bg-unimagBlue text-center text-neutral-600 dark:bg-unimagBlue dark:text-neutral-200 lg:text-left">
<div class="container mx-auto">

    <div class="flex justify-center flex-wrap py-4 md:px-0 px-4 items-center space-x-2">

    <img class="h-20" id="selloUnimagdalena" src="https://cdn.unimagdalena.edu.co/images/escudo/bg_dark/default.png" alt="Escudo de la Universidad del Magdalena">

    <img  class="h-20" id="selloAcreditacion" src="https://cdn.unimagdalena.edu.co/images/acreditacion2/default.png" alt="Marca de acreditación de alta calidad">

    <img  class="h-20" id="logo_marcapais" src="https://cdn.unimagdalena.edu.co/images/logo_marcapais.png" alt="Logo Marca País">

    <img  class="h-20 md:px-0 px-4 border-right border-right-mobile" id="selloColombia" src="https://cdn.unimagdalena.edu.co/images/escudo_colombia.png" alt="Escudo de Colombia">

    <img  class="h-24 md:px-2 px-0" id="sello_icontec" src="https://cdn.unimagdalena.edu.co/images/sello_icontec_iqnet.png" alt="Sello icontec">

    <div  class="md:px-0 px-4" id="sellosCalidad" class="inline-block">
        <img id="sellosCalidad__imagen" class="15" src="https://cdn.unimagdalena.edu.co/images/calidad/bg-dark/default.png" alt="Sellos de calidad">
    </div>

</div>


  <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
  <div class="md:mx-60 mx-4 text-center md:text-left">
    <div class="grid-1 grid py-6 gap-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- Tailwind Elements section -->

       <!-- 1 section -->
<div class="text-center">
   <h3 class="text-left font-semibold text-lg text-white">Useful links</h3>
   <ul class="text-left px-4 text-white font-roboto">
      <li>
         <a href="http://estrategia.gobiernoenlinea.gov.co" target="_blank" rel="noopener noreferrer">Gobierno en línea</a>
      </li>
      <li>
         <a href="http://www.mineducacion.gov.co/1759/w3-channel.html" target="_blank" rel="noopener noreferrer">Ministerio de Educación</a>
      </li>
      <li>
         <a class="" href="https://www.unimagdalena.edu.co/Publico/Mecanismos">Control and monitoring mechanisms</a>
      </li>
      <li>
         <a href="http://aprende.colombiaaprende.edu.co/estudiantes2016" target="_blank" rel="noopener noreferrer">Colombia Aprende</a>
      </li>
      <li>
         <a href="https://portal.icetex.gov.co/Portal/" target="_blank" rel="noopener noreferrer">Icetex</a>
      </li>
      <li>
         <a href="http://www.colciencias.gov.co" target="_blank" rel="noopener noreferrer">Colciencias</a>
      </li>
      <li>
         <a href="http://www.renata.edu.co/index.php" target="_blank" rel="noopener noreferrer">Renata</a>
      </li>
      <li>
         <a href="http://www.universia.net.co" target="_blank" rel="noopener noreferrer">Universia</a>
      </li>
      <li>
         <a href="https://www.encuestafacil.com/universia/UnivGenerica.aspx" target="_blank" rel="noopener noreferrer">universia.encuestafacil</a>
      </li>
   </ul>
</div>
       <!-- 2 section -->
<div class="text-center">
   <h3 class="text-left font-semibold text-lg text-white">Public services</h3>
   <ul class="text-left px-4 text-white font-roboto">
                        <li>
                            <a role="menuitem" href="https://www.unimagdalena.edu.co/Transparencia">Transparency and access to public information</a>
                        </li>
                        <li>
                            <a role="menuitem" href="https://pse.unimagdalena.edu.co/">Online payment</a>
                        </li>
                        <li>
                            <a role="menuitem" href="https://www.unimagdalena.edu.co/Publico/PortalNinos">Kids page</a>
                        </li>
                        <li>
                            <a role="menuitem" href="https://www.unimagdalena.edu.co/Publico/Contacto">Location and means of contact</a>
                        </li>
                        <li>
                            <a role="menuitem" href="https://www.unimagdalena.edu.co/Publico/PreguntasFrecuentes">Frequently asked questions</a>
                        </li>
                        <li>
                            <a role="menuitem" href="http://cogui.unimagdalena.edu.co/index.php?option=com_samco&amp;view=pqr&amp;Itemid=867" target="_blank" rel="noopener noreferrer">Requests, complaints, and suggestions</a>
                        </li>
                        <li>
                            <a role="menuitem" href="https://www.unimagdalena.edu.co/Publico/ProteccionDatosPersonales">Personal data protection</a>
                        </li>
                        <li>
                            <a role="menuitem" href="https://www.unimagdalena.edu.co/Content/DocumentosSubItems/subitem-20171129151642_181.pdf">Letter of dignified treatment to the citizen</a>
                        </li>

                        <li>
                            <a role="menuitem" href="https://www.unimagdalena.edu.co/Publico/Glosario">Glossary</a>
                        </li>
   </ul>
</div>
       <!-- 3 section -->
<div class="text-center">
   <h3 class="text-left font-semibold text-lg text-white">General information</h3>
   <ul class="text-left px-4 text-white font-roboto">
                        <li>
                            <a href="https://www.unimagdalena.edu.co/Content/Public/Docs/reglamento_estudiantil.pdf" target="_blank" rel="noopener noreferrer">Student regulations</a>
                        </li>
                        <li>
                            <a href="https://admisiones.unimagdalena.edu.co/eventos/index.jsp" target="_blank" rel="noopener noreferrer">Academic calendar</a>
                        </li>
                        <li>
                            <a href="https://www.unimagdalena.edu.co/Publico/ProteccionDatosPersonales">Personal data protection</a>
                        </li>
                        <li>
                            <a href="https://www.unimagdalena.edu.co/Publico/InformesGestion">Management reports</a>
                        </li>
                    </ul>
</div>
       <!-- 4 section -->
<div class="text-center">
   <h3 class="text-left font-semibold text-lg text-white">Services</h3>
   <ul class="text-left px-4 text-white font-roboto">
                        <li>
                            <a href="http://bienestar.unimagdalena.edu.co" target="_blank" rel="noopener noreferrer">Bienestar universitario</a>
                        </li>
                        <li>
                            <a href="https://campusvirtual.unimagdalena.edu.co/" target="_blank" rel="noopener noreferrer">Campus Virtual</a>
                        </li>
                        <li>
                            <a href="https://www.unimagdalena.edu.co/UnidadesOrganizativas/Dependencia/9">Recursos educativos</a>
                        </li>
                        <li>
                            <a href="https://www.unimagdalena.edu.co/UnidadesOrganizativas/Dependencia/6">Biblioteca Germán Bula Meyer</a>
                        </li>
                        <li>
                            <a href="http://consultorio.unimagdalena.edu.co" target="_blank" rel="noopener noreferrer">Consultorio jurídico y centro de conciliación</a>
                        </li>
                        <li>
                            <a href="https://www.unimagdalena.edu.co/UnidadesOrganizativas/Dependencia/4">Cartera</a>
                        </li>
                        <li>
                            <a href="https://pse.unimagdalena.edu.co">Pagos en línea</a>
                        </li>
                        <li>
                            <a href="http://portal.unimagdalena.edu.co" target="_blank" rel="noopener noreferrer">Consultar portal anterior</a>
                        </li>
                    </ul>
        </div>
    </div>
</div>


<div class="hidden lg:flex justify-center items-center">

                <img src="{{ asset('infografia.png') }}" alt="infografia" class="h-12 mr-2">
    <!--<img src="https://cdn.unimagdalena.edu.co/images/infografia/blue/72.png" alt="Logo" class="">-->
</div>

</div>
</footer>
<!--
  <div class="bg-neutral-200 p-6 text-center dark:bg-neutral-700">
<div class="container mx-auto">
    <span>© 2023 Copyright:</span>
    <a
      class="font-semibold text-neutral-600 dark:text-neutral-400"
      href="https://tailwind-elements.com/"
      >Tailwind Elements</a
    >
  </div>
</div>
-->



<footer class="footer py-2 px-4 bg-unimagBlue2 text-base-content">

<div class="text-center md:text-left max-w-screen-lg mx-auto">

<h3 class="text-center max-w-screen-lg mb-1 font-sans text-white text-lg font-bold">Contact info</h3>
<div class="text-center max-w-screen-lg mx-auto font-roboto text-white">
    <div class="block mb-4">
        <ul>
            <li>Línea Gratuita Nacional: 01 8000 180 504. PBX: (57 - 5) 4381000 - 4365000</li>
            <li><a href="https://goo.gl/maps/tad2rQS5Jqj" target="_blank" rel="noopener noreferrer">Dirección: Carrera 32 No 22 – 08 Santa Marta D.T.C.H. - Colombia. Código Postal No. 470004</a></li>
            <li><a href="mailto:contacto@unimagdalena.edu.co" target="_blank" rel="noopener noreferrer">Email: ciudadano@unimagdalena.edu.co</a></li>
        </ul>
    </div>
    <div class="block mb-4">
        <p class="infoContacto">La Universidad del Magdalena está sujeta a inspección y vigilancia por el Ministerio de Educación Nacional.</p>
    </div>
    <div class="block mb-4">
        <p>Desarrollado por el Centro de Investigación y Desarrollo de Software CIDS - Unimagdalena © 2018</p>
    </div>
                </div>
        </div>
    </div>
</footer>


</html>

