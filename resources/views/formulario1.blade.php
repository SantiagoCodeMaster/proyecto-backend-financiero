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
                <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario, paso 1,Activos y Pasivos</h1>
                
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div> 
        </header>
         
        <div class="px-6 py-4">
             <h3>En esta usted podra colocar  los datos de la empresa correspodiente a estados finacieros e informacion contable de la empresa. La logica se manejara de la siguiente manera:</h3>
             <h3>los datos que usted pondra sera desde hace cinco añas atras o de los que usted guste, recomendable de 5 años atras primero llenara la informacion del primer mes y luego hace de nuevo la encuesta dando los datos del siguiente mes y asi hasta los 60 meses o mas si desea.</h3>
        </div> 
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
            <form action="{{ route('formulario1.store') }}" method="POST" class="w-full max-w-lg space-y-4">
                @csrf
                             
    <!-- Fecha -->
    <div class="mb-4">
        <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <!-- Activo Corriente -->
    <div class="mb-4">
        <label for="efectivo_equivalentes" class="block text-sm font-medium text-gray-700">Efectivo y equivalentes:</label>
        <input type="number" id="efectivo_equivalentes" name="efectivo_equivalentes" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="deudores_comerciales" class="block text-sm font-medium text-gray-700">Cuentas comerciales por cobrar y otras cuentas por cobrar:</label>
        <input type="number" id="deudores_comerciales" name="deudores_comerciales" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="inventarios" class="block text-sm font-medium text-gray-700">Inventarios:</label>
        <input type="number" id="inventarios" name="inventarios" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="activos_biologicos" class="block text-sm font-medium text-gray-700">Activos biológicos:</label>
        <input type="number" id="activos_biologicos" name="activos_biologicos" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="otros_activos_corrientes" class="block text-sm font-medium text-gray-700">Otros activos corrientes:</label>
        <input type="number" id="otros_activos_corrientes" name="otros_activos_corrientes" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="activos_no_corrientes_venta" class="block text-sm font-medium text-gray-700">Activos no corrientes mantenidos para la venta:</label>
        <input type="number" id="activos_no_corrientes_venta" name="activos_no_corrientes_venta" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <!-- Activo No Corriente -->
    <div class="mb-4">
        <label for="deudores_comerciales_no_corriente" class="block text-sm font-medium text-gray-700">Deudores comerciales no corriente:</label>
        <input type="number" id="deudores_comerciales_no_corriente" name="deudores_comerciales_no_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="inversiones_asociadas_negocios" class="block text-sm font-medium text-gray-700">Inversiones en asociadas y negocios conjuntos:</label>
        <input type="number" id="inversiones_asociadas_negocios" name="inversiones_asociadas_negocios" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="propiedades_planta_equipo" class="block text-sm font-medium text-gray-700">Propiedades, planta y equipo:</label>
        <input type="number" id="propiedades_planta_equipo" name="propiedades_planta_equipo" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="activos_por_derechos" class="block text-sm font-medium text-gray-700">Activos por derechos de uso:</label>
        <input type="number" id="activos_por_derechos" name="activos_por_derechos" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="propiedades_inversion" class="block text-sm font-medium text-gray-700">Propiedades de inversión:</label>
        <input type="number" id="propiedades_inversion" name="propiedades_inversion" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="plusvalia" class="block text-sm font-medium text-gray-700">Plusvalía:</label>
        <input type="number" id="plusvalia" name="plusvalia" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="otros_activos_intangibles" class="block text-sm font-medium text-gray-700">Otros activos intangibles:</label>
        <input type="number" id="otros_activos_intangibles" name="otros_activos_intangibles" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="activo_por_impuesto_diferido" class="block text-sm font-medium text-gray-700">Activo por impuesto diferido:</label>
        <input type="number" id="activo_por_impuesto_diferido" name="activo_por_impuesto_diferido" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="otros_activos_no_corrientes" class="block text-sm font-medium text-gray-700">Otros activos no corrientes:</label>
        <input type="number" id="otros_activos_no_corrientes" name="otros_activos_no_corrientes" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <!-- Pasivo Corriente -->
    <div class="mb-4"> 
        <label for="obligaciones_financieras_corrientes" class="block text-sm font-medium text-gray-700">Obligaciones financieras corrientes:</label>
        <input type="number" id="obligaciones_financieras_corrientes" name="obligaciones_financieras_corrientes" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="pasivos_por_derecho_corriente" class="block text-sm font-medium text-gray-700">Pasivos por derecho corriente:</label>
        <input type="number" id="pasivos_por_derecho_corriente" name="pasivos_por_derecho_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="proveedores_cuentas_pagar_corriente" class="block text-sm font-medium text-gray-700">Proveedores y cuentas por pagar corriente:</label>
        <input type="number" id="proveedores_cuentas_pagar_corriente" name="proveedores_cuentas_pagar_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="impuestos_por_pagar_corriente" class="block text-sm font-medium text-gray-700">Impuestos por pagar corriente:</label>
        <input type="number" id="impuestos_por_pagar_corriente" name="impuestos_por_pagar_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="pasivo_beneficios_empleados_corriente" class="block text-sm font-medium text-gray-700">Pasivo por beneficios a empleados corriente:</label>
        <input type="number" id="pasivo_beneficios_empleados_corriente" name="pasivo_beneficios_empleados_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="provisiones_corriente" class="block text-sm font-medium text-gray-700">Provisiones corriente:</label>
        <input type="number" id="provisiones_corriente" name="provisiones_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <!-- Pasivo No Corriente -->
    <div class="mb-4">
        <label for="obligaciones_financieras_no_corriente" class="block text-sm font-medium text-gray-700">Obligaciones financieras no corriente:</label>
        <input type="number" id="obligaciones_financieras_no_corriente" name="obligaciones_financieras_no_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="pasivos_por_derecho_no_corriente" class="block text-sm font-medium text-gray-700">Pasivos por derecho no corriente:</label>
        <input type="number" id="pasivos_por_derecho_no_corriente" name="pasivos_por_derecho_no_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="proveedores_cuentas_pagar_no_corriente" class="block text-sm font-medium text-gray-700">Proveedores y cuentas por pagar no corriente:</label>
        <input type="number" id="proveedores_cuentas_pagar_no_corriente" name="proveedores_cuentas_pagar_no_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="pasivo_beneficios_empleados_no_corriente" class="block text-sm font-medium text-gray-700">Pasivo por beneficios a empleados no corriente:</label>
        <input type="number" id="pasivo_beneficios_empleados_no_corriente" name="pasivo_beneficios_empleados_no_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="pasivo_por_impuesto_diferido" class="block text-sm font-medium text-gray-700">Pasivo por impuesto diferido:</label>
        <input type="number" id="pasivo_por_impuesto_diferido" name="pasivo_por_impuesto_diferido" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
    </div>

    <div class="mb-4">
        <label for="provisiones_no_corriente" class="block text-sm font-medium text-gray-700">Provisiones no corriente:</label>
        <input type="number" id="provisiones_no_corriente" name="provisiones_no_corriente" step="0.01" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
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