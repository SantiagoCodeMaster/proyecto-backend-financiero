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
                <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario, paso 5,Movimientos</h1>
                
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div> 
            </div> 
        </header>
     
        <br>
        <!-- Main Form Content -->
        <main class="flex-grow flex flex-col items-center justify-center px-6">
            <form action="{{ route('formulario5.store') }}" method="POST" class="w-full max-w-lg space-y-4">
                @csrf

                <div class="mb-4">
                    <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="ingresos_totales" class="block text-sm font-medium text-gray-700">Ingresos Totales:</label>
                    <input type="number" id="ingresos_totales" name="ingresos_totales" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="ventas_por_producto_servicio" class="block text-sm font-medium text-gray-700">Ventas por Producto/Servicio:</label>
                    <input type="number" id="ventas_por_producto_servicio" name="ventas_por_producto_servicio" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="costos_ventas" class="block text-sm font-medium text-gray-700">Costos de Ventas:</label>
                    <input type="number" id="costos_ventas" name="costos_ventas" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="gastos_fijos_variables" class="block text-sm font-medium text-gray-700">Gastos Fijos/Variables:</label>
                    <input type="number" id="gastos_fijos_variables" name="gastos_fijos_variables" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="ganancias_perdidas_netas" class="block text-sm font-medium text-gray-700">Ganancias/Perdidas Netas:</label>
                    <input type="number" id="ganancias_perdidas_netas" name="ganancias_perdidas_netas" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="unidades_producidas_servicios_prestados" class="block text-sm font-medium text-gray-700">Unidades Producidas/Servicios Prestados:</label>
                    <input type="number" id="unidades_producidas_servicios_prestados" name="unidades_producidas_servicios_prestados"  step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="porcentaje_utilizacion_capacidad" class="block text-sm font-medium text-gray-700">Porcentaje de Utilización de Capacidad:</label>
                    <input type="number" id="porcentaje_utilizacion_capacidad" name="porcentaje_utilizacion_capacidad" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="costos_unitarios" class="block text-sm font-medium text-gray-700">Costos Unitarios:</label>
                    <input type="number" id="costos_unitarios" name="costos_unitarios" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="volumen_venta" class="block text-sm font-medium text-gray-700">Volumen de Venta:</label>
                    <input type="number" id="volumen_venta" name="volumen_venta" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
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