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
                <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario, paso 2</h1>
                
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div> 
        </header>
       
        <br>
        <!-- Main Form Content -->
        <main class="flex-grow flex flex-col items-center justify-center px-6">
            <form action="{{ route('formulario2') }}" method="POST" class="w-full max-w-lg space-y-4">
                @csrf
   
                <div>
                    <label for="empresa" class="block text-gray-800 dark:text-white mb-2">efectivo y equivalentes a efectivo:</label>
                    <textarea id="efectivo" name="efectivo" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="deudores comerciales y otras cuentas por pagar" class="block text-gray-800 dark:text-white mb-2">deudores comerciales y otras cuentas por pagar:</label>
                    <textarea id="deudores" name="deudores" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Inventarios " class="block text-gray-800 dark:text-white mb-2">Inventarios:</label>
                    <textarea id="Inventarios " name="Inventarios " class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Activos biológicos" class="block text-gray-800 dark:text-white mb-2">Activos biológicos:</label>
                    <textarea id="Activos biológicos" name="Activos biológicos" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Otros activos" class="block text-gray-800 dark:text-white mb-2">Otros activos:</label>
                    <textarea id="Otros activos" name="Otros activos" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                
                <div>
                    <label for="Activos no corrientes mantenidos para la venta" class="block text-gray-800 dark:text-white mb-2">Activos no corrientes mantenidos para la venta:</label>
                    <textarea id="Activos no corrientes mantenidos para la venta" name="Activos no corrientes mantenidos para la venta" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Deudores comerciales y otras cuentas por cobrar" class="block text-gray-800 dark:text-white mb-2">Deudores comerciales y otras cuentas por cobrar:</label>
                    <textarea id="Deudores comerciales y otras cuentas por cobrar" name="Deudores comerciales y otras cuentas por cobrar" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Inversiones Asociadas" class="block text-gray-800 dark:text-white mb-2">Inversiones Asociadas:</label>
                    <textarea id="Inversiones Asociadas" name="Inversiones Asociadas" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Propiedades, Planta y Equipo" class="block text-gray-800 dark:text-white mb-2">Propiedades, Planta y Equipo:</label>
                    <textarea id="Propiedades, Planta y Equipo" name="Propiedades, Planta y Equipo" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Propiedades, Planta y Equipo" class="block text-gray-800 dark:text-white mb-2">Propiedades, Planta y Equipo:</label>
                    <textarea id="Propiedades, Planta y Equipo" name="Propiedades, Planta y Equipo" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Activos por Derechos" class="block text-gray-800 dark:text-white mb-2">Activos por Derechos:</label>
                    <textarea id="Activos por Derechos" name="Propiedades, Planta y Equipo" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Propiedades de Inversión" class="block text-gray-800 dark:text-white mb-2">Propiedades de Inversión:</label>
                    <textarea id="Propiedades de Inversión" name="Propiedades de Inversión" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Plusvalía" class="block text-gray-800 dark:text-white mb-2">Plusvalía:</label>
                    <textarea id="Plusvalía" name="Plusvalía" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Activos Intangibles" class="block text-gray-800 dark:text-white mb-2">Activos Intangibles:</label>
                    <textarea id="Activos Intangibles" name="Activos Intangibles" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Activo por Impuesto Diferido" class="block text-gray-800 dark:text-white mb-2">Activo por Impuesto Diferido:</label>
                    <textarea id="Activo por Impuesto Diferido" name="Activo por Impuesto Diferido" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Otros Activos No Corrientes" class="block text-gray-800 dark:text-white mb-2">Otros Activos No Corrientes:</label>
                    <textarea id="Otros Activos No Corrientes" name="Otros Activos No Corrientes" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="Obligaciones Financieras Corrientes" class="block text-gray-800 dark:text-white mb-2">Obligaciones Financieras Corrientes:</label>
                    <textarea id="Obligaciones Financieras Corrientes" name="Otros Activos No Corrientes" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
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