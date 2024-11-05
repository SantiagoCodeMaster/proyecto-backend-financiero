<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llenar el formulario</title>
    @vite('resources/css/app.css')
    <style>
        /* Estilo para el efecto de agrandamiento al pasar el mouse */
        .hover:scale-105 {
            transition: transform 0.2s ease-in-out;
        }

        .hover:hover {
            transform: scale(1.05);
        }

        /* Estilo para el contenedor del botón de perfil */
        .profile-button-container {
            border: 2px solid white; /* Borde blanco */
            border-radius: 0.375rem; /* Esquinas redondeadas */
            padding: 4px; /* Espaciado interno */
            background-color: transparent; /* Fondo transparente */
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">

    <header class="bg-gray-800 dark:bg-gray-900 relative shadow-md">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario</h1>
            <div class="flex items-center space-x-6">
                <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                <!-- Contenedor para el botón de perfil -->
                <div class="profile-button-container">
                    <a href="{{ route('profile.edit') }}" class="flex items-center justify-center rounded-lg bg-blue-600 text-white px-4 py-2 hover:bg-blue-500 transition duration-300 ease-in-out">
                        Perfil
                    </a>
                </div>
                <!-- Botón de Cerrar Sesión -->
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="flex items-center justify-center rounded-lg bg-red-600 text-white px-4 py-2 hover:bg-red-500 transition duration-300 ease-in-out">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>   
    </header>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <span class="text-sm">{{ __("You're logged in!") }}</span>
                </div>
            </div>
        </div>
    </div>

    <main class="flex-1 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-6 py-4">
                <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">Querido usuario</h1>
                <h3 class="mb-2">En este formulario tendrá la oportunidad de llenar los datos de la empresa que usted representa. Los datos financieros son de rigurosa seguridad, por lo mismo estos datos nadie más que usted tendrá acceso.</h3>
                <h3 class="mb-2">Como representante de su empresa, usted será el responsable de guardar los datos de sesión de inicio.</h3>
            </div>
            <p>Carga tus informes financieros y recibe análisis detallados con indicadores clave y datos macroeconómicos para evaluar tu salud financiera y potencial de crecimiento.</p>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                        <!-- Botón para proceder a registrar los datos -->
                        <a href="{{ route('formulario1') }}" class="flex items-center rounded-lg bg-[#FF2D20]/10 p-4 hover:bg-[#FF2D20]/20 transition duration-300 ease-in-out hover:scale-105">
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path d="M12 11.292L7.707 7h8.586L12 11.292zM5 12a7 7 0 0 1 14 0h2a9 9 0 0 0-18 0h2z" fill="#FF2D20"/>
                                </svg>
                            </div>
                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Plataforma de Análisis Financiero para Empresas,</h2>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Proceder a registrar los datos
                                </p>
                            </div>
                            <svg class="w-6 h-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                            </svg>
                        </a>
                        <!-- Nuevo botón para mostrar datos registrados -->
                        <a href="{{ route('show') }}" class="flex items-center rounded-lg bg-[#FF2D20]/10 p-4 hover:bg-[#FF2D20]/20 transition duration-300 ease-in-out hover:scale-105">
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path d="M12 11.292L7.707 7h8.586L12 11.292zM5 12a7 7 0 0 1 14 0h2a9 9 0 0 0-18 0h2z" fill="#FF2D20"/>
                                </svg>
                            </div>
                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Mostrar datos registrados</h2>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                    Ver los datos ingresados anteriormente
                                </p>
                            </div>
                            <svg class="w-6 h-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
