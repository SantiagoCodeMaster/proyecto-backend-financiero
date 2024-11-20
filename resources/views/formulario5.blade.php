<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <header class="bg-gray-800 dark:bg-gray-900 relative">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white">Application Dashboard</h1>
                <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
            </div> 
        </header>
        <main class="flex-1 py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <p class="text-red-500 mb-6"> ATENCION: En este apartado podrás registrar los datos básicos de sus clientes, como nombre del cliente o empresa, número de cédula o NIT y compras al mes. Por favor, si vas a dar estos datos, consulta con tus clientes antes de proporcionarlos para asegurarte de que estén de acuerdo. Recomendamos mucho este apartado porque es fundamental para alimentar el algoritmo y obtener buenos resultados.</p>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                            <!-- Login Section -->
                            <a href="{{ route('formulario_cliente') }}"
                        
                               class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-md ring-1 ring-gray-200 transition duration-300 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 hover:ring-gray-200 focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
                                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                    <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <path d="M12 11.292L7.707 7h8.586L12 11.292zM5 12a7 7 0 0 1 14 0h2a9 9 0 0 0-18 0h2z" fill="#FF2D20"/>
                                    </svg>
                                </div>
                                <div class="pt-3 sm:pt-5">
                                    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Registro datos cliente</h2>
                                    <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                         Proccede a registrar los datos del cliente
                                    </p>
                                </div>
                                <svg class="w-6 h-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                                </svg>
                            </a>
  
                            <!-- Register Section -->
                            <form action="{{ route('algoritm') }}" >
                                @csrf
                                <button type="submit" class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-md ring-1 ring-gray-200 transition duration-300 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 hover:ring-gray-200 focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path d="M4 12l-1-1 4-4 1 1-3 3L4 12zm1 1h12v2H5v-2zm0-4h12v2H5v-2z" fill="#FF2D20"/>
                                        </svg>
                                    </div>
                                    <div class="pt-3 sm:pt-5">
                                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Mostrar resultados financieros con sus predicciones</h2>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            En este apartado podemos seguir a evaluar los resultados.
                                        </p>
                                    </div>
                                    <svg class="w-6 h-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-800 dark:bg-gray-900 py-6 text-center text-sm text-white">
            <!-- Agrega contenido aquí si lo deseas -->
        </footer>
    </div>
</body>
</html>
