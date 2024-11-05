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
                <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario, paso 3 Ingresos,Utilidades,Gastos</h1>
                
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div> 
        </header>

        <br>
        @if (session('status'))
        <p>{{ session('status') }}</p>
        @endif

        @if ($errors->any())
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
         </ul>
        @endif
        <!-- Main Form Content -->
        <main class="flex-grow flex flex-col items-center justify-center px-6">
            <form action="{{ route('formulario3.store') }}" method="POST" class="w-full max-w-lg space-y-4">
                @csrf

                <div class="mb-4">
                    <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="costos_venta" class="block text-sm font-medium text-gray-700">Costos de Venta:</label>
                    <input type="number" id="costos_venta" name="costos_venta" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="utilidad_bruta" class="block text-sm font-medium text-gray-700">Utilidad Bruta:</label>
                    <input type="number" id="utilidad_bruta" name="utilidad_bruta" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="gastos_administracion" class="block text-sm font-medium text-gray-700">Gastos de Administración:</label>
                    <input type="number" id="gastos_administracion" name="gastos_administracion" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="gastos_venta" class="block text-sm font-medium text-gray-700">Gastos de Venta:</label>
                    <input type="number" id="gastos_venta" name="gastos_venta" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="gastos_produccion" class="block text-sm font-medium text-gray-700">Gastos de Producción:</label>
                    <input type="number" id="gastos_produccion" name="gastos_produccion" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="diferencia_cambio_activos_pasivos" class="block text-sm font-medium text-gray-700">Diferencia en Cambio de Activos y Pasivos:</label>
                    <input type="number" id="diferencia_cambio_activos_pasivos" name="diferencia_cambio_activos_pasivos" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="otros_ingresos_netos" class="block text-sm font-medium text-gray-700">Otros Ingresos Netos:</label>
                    <input type="number" id="otros_ingresos_netos" name="otros_ingresos_netos" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="utilidad_operativa" class="block text-sm font-medium text-gray-700">Utilidad Operativa:</label>
                    <input type="number" id="utilidad_operativa" name="utilidad_operativa" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="ingresos_financieros" class="block text-sm font-medium text-gray-700">Ingresos Financieros:</label>
                    <input type="number" id="ingresos_financieros" name="ingresos_financieros" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="gastos_financieros" class="block text-sm font-medium text-gray-700">Gastos Financieros:</label>
                    <input type="number" id="gastos_financieros" name="gastos_financieros" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="dividendos" class="block text-sm font-medium text-gray-700">Dividendos:</label>
                    <input type="number" id="dividendos" name="dividendos" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="diferencia_cambio_activos_pasivos_no_operativos" class="block text-sm font-medium text-gray-700">Diferencia en Cambio de Activos y Pasivos No Operativos:</label>
                    <input type="number" id="diferencia_cambio_activos_pasivos_no_operativos" name="diferencia_cambio_activos_pasivos_no_operativos" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="participacion_asociadas_negocios" class="block text-sm font-medium text-gray-700">Participación en Asociadas de Negocios:</label>
                    <input type="number" id="participacion_asociadas_negocios" name="participacion_asociadas_negocios" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="utilidad_antes_impuestos" class="block text-sm font-medium text-gray-700">Utilidad Antes de Impuestos:</label>
                    <input type="number" id="utilidad_antes_impuestos" name="utilidad_antes_impuestos" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="impuesto_renta_corriente" class="block text-sm font-medium text-gray-700">Impuesto a la Renta Corriente:</label>
                    <input type="number" id="impuesto_renta_corriente" name="impuesto_renta_corriente" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="impuesto_renta_diferido" class="block text-sm font-medium text-gray-700">Impuesto a la Renta Diferido:</label>
                    <input type="number" id="impuesto_renta_diferido" name="impuesto_renta_diferido" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="utilidad_periodo_operaciones_continuadas" class="block text-sm font-medium text-gray-700">Utilidad del Período de Operaciones Continuadas:</label>
                    <input type="number" id="utilidad_periodo_operaciones_continuadas" name="utilidad_periodo_operaciones_continuadas" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4"> 
                    <label for="operaciones_discontinuadas" class="block text-sm font-medium text-gray-700">Operaciones Discontinuadas:</label>
                    <input type="number" id="operaciones_discontinuadas" name="operaciones_discontinuadas" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
        
                <div class="mb-4">
                    <label for="utilidad_neta_periodo" class="block text-sm font-medium text-gray-700">Utilidad Neta del Período:</label>
                    <input type="number" id="utilidad_neta_periodo" name="utilidad_neta_periodo" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
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