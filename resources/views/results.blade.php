<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predicciones del Algoritmo</title>
    @vite('resources/css/app.css') 
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-gray-800 dark:bg-gray-900 relative shadow-md">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white tracking-tight">Predicciones del Algoritmo</h1>
            </div>
        </header>

        <!-- Mostrar los resultados -->
        <div class="p-4">
            <h2 class="text-xl font-bold mb-4">Resultados del Algoritmo</h2>

            <!-- Mostrar tabla de predicciones -->
            <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-lg shadow-md">
                <thead class="bg-gray-100 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 py-2 text-left">#</th>
                        <th class="px-4 py-2 text-right">Predicción</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($resultados['predicciones'][0]) && is_array($resultados['predicciones'][0]))
                        @foreach ($resultados['predicciones'][0] as $index => $prediccion)
                            <tr class="border-b">
                                <td class="px-4 py-2">{{ $index + 1 }}</td>
                                <td class="px-4 py-2 text-right">{{ number_format($prediccion, 2) }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2" class="px-4 py-2 text-center">No hay predicciones disponibles</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
