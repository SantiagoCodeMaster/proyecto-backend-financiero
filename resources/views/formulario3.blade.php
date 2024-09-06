<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>  
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <header class="bg-gray-800 dark:bg-gray-900 relative shadow-md">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario, paso 3,Patrimonio</h1>
                
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div> 
        </header>
         
        
        <br>
        <!-- Main Form Content -->
        <main class="flex-grow flex flex-col items-center justify-center px-6">
            <form action="{{ route('formulario3.store') }}" method="POST" class="w-full max-w-lg space-y-4">
                @csrf  
                <div class="mb-4">
                    <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="capital_emitido" class="block text-sm font-medium text-gray-700">Capital Emitido:</label>
                    <input type="number" id="capital_emitido" name="capital_emitido" step="0.00000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="prima_emision_capital" class="block text-sm font-medium text-gray-700">Prima Emisión de Capital:</label>
                    <input type="number" id="prima_emision_capital" name="prima_emision_capital" step="0.00000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="reservas_utilidades_acumuladas" class="block text-sm font-medium text-gray-700">Reservas y Utilidades Acumuladas:</label>
                    <input type="number" id="reservas_utilidades_acumuladas" name="reservas_utilidades_acumuladas" step="0.00000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="otro_resultado_integral" class="block text-sm font-medium text-gray-700">Otro Resultado Integral:</label>
                    <input type="number" id="otro_resultado_integral" name="otro_resultado_integral" step="0.00000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="utilidad_periodo" class="block text-sm font-medium text-gray-700">Utilidad del Periodo:</label>
                    <input type="number" id="utilidad_periodo" name="utilidad_periodo" step="0.00000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="patrimonio_atributable_controladoras" class="block text-sm font-medium text-gray-700">Patrimonio Atribuible a Controladoras:</label>
                    <input type="number" id="patrimonio_atributable_controladoras" name="patrimonio_atributable_controladoras" step="0.00000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="participaciones_no_controladoras" class="block text-sm font-medium text-gray-700">Participaciones No Controladoras:</label>
                    <input type="number" id="participaciones_no_controladoras" name="participaciones_no_controladoras" step="0.000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        

                <div class="flex justify-end">
                    <button type="submit" class="bg-green-600 text-blue-400 font-bold py-3 px-6 text-lg rounded hover:bg-green-700">
                        Siguiente
                    </button>
                </div>
                  
            </form>
        </main>

        <!-- Footer (optional) -->
        <footer class="bg-gray-800 dark:bg-gray-900 text-gray-300 py-4 text-center">
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </footer>
    </div>
</body>
</html> 