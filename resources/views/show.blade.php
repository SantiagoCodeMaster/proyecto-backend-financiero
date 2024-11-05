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
                <h1 class="text-3xl font-bold text-white">Estado Financiero</h1>
                <div class="flex items-center space-x-4">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div>
        </header>

        <!-- Contenido principal -->
        <main class="flex-grow">
            <div class="container mx-auto mt-4 px-4 sm:px-6 lg:px-8">
                <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-6">Datos de Estado Financiero</h1>

                <!-- Tabla de estado financiero -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700">
                        <thead>
                            <tr class="bg-gray-100 dark:bg-gray-700">
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">ID</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Efectivo Equivalentes</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Deudores Comerciales</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Inventarios</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Activos Biológicos</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Otros Activos Corrientes</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Activos No Corrientes Venta</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Deudores Comerciales No Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Inversiones Asociadas Negocios</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Propiedades Planta Equipo</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Activos por Derechos</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Propiedades Inversión</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Plusvalía</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Otros Activos Intangibles</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Activo por Impuesto Diferido</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Otros Activos No Corrientes</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Obligaciones Financieras Corrientes</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Pasivos por Derecho Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Proveedores Cuentas por Pagar Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Impuestos por Pagar Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Pasivo Beneficios Empleados Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Provisiones Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Obligaciones Financieras No Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Pasivos por Derecho No Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Proveedores Cuentas por Pagar No Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Pasivo Beneficios Empleados No Corriente</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Pasivo por Impuesto Diferido</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-gray-800 dark:text-gray-300">Provisiones No Corriente</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($estadosFinancieros as $estado)
                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ $estado->id }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->efectivo_equivalentes, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->deudores_comerciales, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->inventarios, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->activos_biologicos, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->otros_activos_corrientes, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->activos_no_corrientes_venta, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->deudores_comerciales_no_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->inversiones_asociadas_negocios, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->propiedades_planta_equipo, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->activos_por_derechos, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->propiedades_inversion, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->plusvalia, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->otros_activos_intangibles, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->activo_por_impuesto_diferido, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->otros_activos_no_corrientes, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->obligaciones_financieras_corrientes, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->pasivos_por_derecho_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->proveedores_cuentas_por_pagar_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->impuestos_por_pagar_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->pasivo_beneficios_empleados_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->provisiones_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->obligaciones_financieras_no_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->pasivos_por_derecho_no_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->proveedores_cuentas_por_pagar_no_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->pasivo_beneficios_empleados_no_corriente, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->pasivo_por_impuesto_diferido, 2) }}</td>
                                <td class="py-2 px-4 border-b dark:border-gray-600">{{ number_format($estado->provisiones_no_corriente, 2) }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 dark:bg-gray-900 py-4">
            <div class="container mx-auto text-center">
                <p class="text-gray-400">© 2024 Artificial Financial Calculation. Todos los derechos reservados.</p>
            </div>
        </footer>
    </div>
</body>
</html>
