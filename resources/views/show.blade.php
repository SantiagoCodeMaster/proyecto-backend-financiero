<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado Financiero</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <!-- Encabezado -->
        <header class="bg-gray-800 dark:bg-gray-900 relative">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white">Datos financieros</h1>
                <div class="flex items-center space-x-4">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div>
        </header>

        <!-- Contenido -->
        <main class="flex-1 max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <!-- Estado Financiero -->
            <section class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Estado Financiero</h2>
                <ul class="list-disc pl-6">
                    @foreach ($estadoFinanciero as $item)
                        <li class="text-gray-700 dark:text-gray-300">{{ $item }}</li>
                    @endforeach
                </ul>
            </section>


            <!-- Patrimonio -->
            <section class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Patrimonio</h2>
                <ul class="list-disc pl-6">
                    @foreach ($patrimonio as $item)
                        <li class="text-gray-700 dark:text-gray-300">{{ $item }}</li>
                    @endforeach
                </ul>
            </section>

            <!-- Movimientos -->
            <section class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Movimientos</h2>
                <ul class="list-disc pl-6">
                    @foreach ($movimientos as $item)
                        <li class="text-gray-700 dark:text-gray-300">{{ $item }}</li>
                    @endforeach
                </ul>
            </section>

            <!-- Indicadores Financieros -->
            <section class="bg-white dark:bg-gray-800 shadow overflow-hidden sm:rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Indicadores Financieros</h2>
                <ul class="list-disc pl-6">
                    @foreach ($indicadores as $item)
                        <li class="text-gray-700 dark:text-gray-300">{{ $item }}</li>
                    @endforeach
                </ul>
            </section>
        </main>
    </div>
</body>
</html>


        <!-- Footer (optional) -->
        <footer class="bg-gray-800 dark:bg-gray-900 text-gray-300 py-4 text-center">
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </footer>
    </div>
</body>
</html> 