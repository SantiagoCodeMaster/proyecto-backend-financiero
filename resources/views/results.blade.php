<!-- resources/views/resultados.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Empresa</title>
    @vite('resources/css/app.css') <!-- Si estás usando Vite -->
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-gray-800 dark:bg-gray-900 relative shadow-md">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white tracking-tight">Información Financiera y Macroeconómica</h1>
            </div>
        </header>

        <!-- Mostrar los resultados -->
        <div class="p-4">
            <h2 class="text-xl font-bold">Resultados del Algoritmo</h2>

            <!-- Mostrar los datos recibidos desde Python -->
            <p><strong>Empresa ID:</strong> {{ $resultados['empresa'] }}</p>
            <p><strong>Rentabilidad:</strong> {{ $resultados['rentabilidad'] }}</p>
            <p><strong>Empleados:</strong> {{ $resultados['empleados'] }}</p>
        </div>
    </div>
</body>
</html>
