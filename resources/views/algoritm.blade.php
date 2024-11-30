<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Empresa</title>  
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-gray-800 dark:bg-gray-900 relative shadow-md">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white tracking-tight">Información Financiera y Macroeconómica</h1>
            </div>
        </header>


        <main class="flex-grow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                @if(session('error'))
                <script>
                    alert("{{ session('error') }}");
                </script>
                 @endif
                <!-- Verificar si todos los datos están vacíos -->
                @if($estadoFinanciero->isEmpty() && $patrimonio->isEmpty() && $movimientos->isEmpty() && $indicadores->isEmpty())
                    <!-- Mensaje de advertencia -->
                    <div class="bg-red-500 text-white p-4 rounded-lg flex items-center space-x-3">
                        <span class="text-2xl">⚠️</span>
                        <p class="text-lg font-bold text-black">Aún no has completado la encuesta, llénala antes de hacer este paso.</p>
                    </div>
                @else
                <h1>En nombre de la empresa: </h1>
                 <!-- Verificar si la empresa está asociada al usuario logueado -->
                 @if(Auth::check() && Auth::user()->id_empresa)
                 @php
                     $empresa = \App\Models\Empresa::find(Auth::user()->id_empresa);
                 @endphp
                 @if($empresa)
                     <span class="text-yellow-400">{{ $empresa->nombre_empresa }}</span>
                 @else
                     <span class="text-red-500">No se ha asignado una empresa a tu cuenta</span>
                 @endif
             @else
                 <span class="text-red-500">Usuario no tiene empresa asociada</span>
             @endif
                <h1>Estos fueron los datos que ingresaste, por favor Verificar , una vez verificados   puedes dar continuar en la parte inferior para utilizar el algortimo.</h1>
                    <!-- Estado Financiero -->
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mt-6">Estado Financiero</h2>
                    @if($estadoFinanciero->isEmpty())
                        <p class="text-black">Aún no has completado la encuesta, llénala antes de hacer este paso.</p>
                    @else
                        <pre class="bg-gray-200 dark:bg-gray-800 p-4 rounded-lg text-gray-800 dark:text-white">
                            @json($estadoFinanciero)
                        </pre>
                    @endif

                    <!-- Patrimonio -->
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mt-6">Patrimonio</h2>
                    @if($patrimonio->isEmpty())
                        <p class="text-black">Aún no has completado la encuesta, llénala antes de hacer este paso.</p>
                    @else
                        <pre class="bg-gray-200 dark:bg-gray-800 p-4 rounded-lg text-gray-800 dark:text-white">
                            @json($patrimonio)
                        </pre>
                    @endif

                    <!-- Movimientos -->
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mt-6">Movimientos</h2>
                    @if($movimientos->isEmpty())
                        <p class="text-black">Aún no has completado la encuesta, llénala antes de hacer este paso.</p>
                    @else
                        <pre class="bg-gray-200 dark:bg-gray-800 p-4 rounded-lg text-gray-800 dark:text-white">
                            @json($movimientos)
                        </pre>
                    @endif

                    <!-- Indicadores Financieros -->
                    <h2 class="text-xl font-semibold text-gray-800 dark:text-white mt-6">Indicadores Financieros</h2>
                    @if($indicadores->isEmpty())
                        <p class="text-black">Aún no has completado la encuesta, llénala antes de hacer este paso.</p>
                    @else
                        <pre class="bg-gray-200 dark:bg-gray-800 p-4 rounded-lg text-gray-800 dark:text-white">
                            @json($indicadores)
                        </pre>
                    @endif
                @endif
            </div>
        </main>
    </div>
</body>
</html>

<br>

<main class="flex-grow flex justify-start px-6">
    <form action="{{ route('algoritm.store') }}" method="POST" class="w-full max-w-lg space-y-4">
        @csrf
            <button 
                type="submit" 
                class="bg-green-600 text-white font-bold py-3 px-6 text-lg rounded hover:bg-green-700 transition duration-300 ease-in-out transform hover:scale-105">
                Continuar con el algoritmo
            </button>
        </div>
    </form>
</main> 




<br>

        <!-- Footer (optional) -->
        <footer class="bg-gray-800 dark:bg-gray-900 text-gray-300 py-4 text-center">
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </footer>
    </div>
</body>
</html> 