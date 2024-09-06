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
                <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario, paso 6,Productos</h1>
                
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>  
            </div> 
        </header>
     
        <br>
        <!-- Main Form Content -->
        <main class="flex-grow flex flex-col items-center justify-center px-6">
            <form action="{{ route('formulario6.store') }}" method="POST" class="w-full max-w-lg space-y-4">
                @csrf

                <div class="mb-4">
                    <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="nombre_producto" class="block text-sm font-medium text-gray-700">Nombre del Producto:</label>
                    <input type="text" id="nombre_producto" name="nombre_producto" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="precio_producto" class="block text-sm font-medium text-gray-700">Precio del Producto:</label>
                    <input type="number" id="precio_producto" name="precio_producto" step="0.0000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="costos_produccion" class="block text-sm font-medium text-gray-700">Costos de Producción:</label>
                    <input type="number" id="costos_produccion" name="costos_produccion" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
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