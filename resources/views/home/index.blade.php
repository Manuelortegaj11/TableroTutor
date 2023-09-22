<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</head>

<body>
    <nav class="bg-unimagBlue p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="/" class="text-white flex items-center">
                <img src="{{ asset('unimagdefault.png') }}" alt="Logo" class="h-12 mr-2">
                <span class="text-1xl font-semibold">TABLERO DE TUTOR</span>
            </a>
            <div class="md:hidden">
                <button id="mobile-menu-button" class="text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="menu-icon">
                        <path fill="none" d="M0 0h24v24H0z" />
                        <path fill="currentColor" d="M4 18h16a1 1 0 010 2H4a1 1 0 010-2zm0-6h16a1 1 0 010 2H4a1 1 0 010-2zm0-6h16a1 1 0 010 2H4a1 1 0 010-2z" />
                    </svg>
                </button>
                <ul id="mobile-menu" class="hidden bg-unimagBlue text-white absolute w-full mt-3 left-0">
                    <li class="block px-4 py-2 border-b-2 dark:hover:bg-unimagOrange border-white-500"><a href="/diligenciar-formulario">Diligenciar Formulario</a></li>
                    <li class="block px-4 py-2 border-b-2 dark:hover:bg-unimagOrange border-white-500"><a href="/listado-proximo-graduado">Lista de Próximos Graduados</a></li>
                    <li class="block px-4 py-2 border-b-2 dark:hover:bg-unimagOrange border-unimagOrange"><a href="/lista-egresados">Lista de Egresados</a></li>
                </ul>
            </div>

            <ul class="hidden md:flex space-x-3 text-white">
                <li>
                    <div class="relative group">
                        <button class="group-hover:bg-unimagBlue">Formulario de Grado</button>
                        <ul class="hidden absolute bg-unimagBlue text-white mt-2 space-y-2 left-0">
                            <li class="block px-4 py-2 dark:hover:bg-unimagOrange dark:hover:text-white border-b-2 border-white-700"><a href="/diligenciar-formulario">Diligenciar Formulario</a></li>
                            <li class="block px-4 py-2 dark:hover:bg-unimagOrange dark:hover:text-white border-b-2 border-white-700"><a href="/listado-proximo-graduado">Lista de Próximos Graduados</a></li>
                            <li class="block px-4 py-2 dark:hover:bg-unimagOrange dark:hover:text-white border-b-2 border-unimagOrange"><a href="/lista-egresados">Lista de Egresados</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
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
    <div class="border-b-2 border-unimagOrange"></div>

    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</body>

<!--<footer class="bg-unimagBlue text-white p-6">
    <div class="flex justify-center space-x-4">
        <button class="bg-white text-blue-700 hover:bg-unimagBlue hover:text-white px-4 py-2 rounded-md transition duration-300 ease-in-out">Botón 1</button>
        <button class="bg-white text-blue-700 hover:bg-unimagBlue hover:text-white px-4 py-2 rounded-md transition duration-300 ease-in-out">Botón 2</button>
    </div>
</footer>-->


</html>

