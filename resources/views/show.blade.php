<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado Financiero</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container mx-auto mt-4">
        <h1 class="text-2xl font-bold mb-4">Datos de Estado Financiero</h1>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">ID</th>
                    <th class="py-2 px-4 border-b">Efectivo Equivalentes</th>
                    <th class="py-2 px-4 border-b">Deudores Comerciales</th>
                    <th class="py-2 px-4 border-b">Inventarios</th>
                    <th class="py-2 px-4 border-b">Activos Biológicos</th>
                    <th class="py-2 px-4 border-b">Otros Activos Corrientes</th>
                    <th class="py-2 px-4 border-b">Activos No Corrientes Venta</th>
                    <th class="py-2 px-4 border-b">Deudores Comerciales No Corriente</th>
                    <th class="py-2 px-4 border-b">Inversiones Asociadas Negocios</th>
                    <th class="py-2 px-4 border-b">Propiedades Planta Equipo</th>
                    <th class="py-2 px-4 border-b">Activos por Derechos</th>
                    <th class="py-2 px-4 border-b">Propiedades Inversión</th>
                    <th class="py-2 px-4 border-b">Plusvalía</th>
                    <th class="py-2 px-4 border-b">Otros Activos Intangibles</th>
                    <th class="py-2 px-4 border-b">Activo por Impuesto Diferido</th>
                    <th class="py-2 px-4 border-b">Otros Activos No Corrientes</th>
                    <th class="py-2 px-4 border-b">Obligaciones Financieras Corrientes</th>
                    <th class="py-2 px-4 border-b">Pasivos por Derecho Corriente</th>
                    <th class="py-2 px-4 border-b">Proveedores Cuentas por Pagar Corriente</th>
                    <th class="py-2 px-4 border-b">Impuestos por Pagar Corriente</th>
                    <th class="py-2 px-4 border-b">Pasivo Beneficios Empleados Corriente</th>
                    <th class="py-2 px-4 border-b">Provisiones Corriente</th>
                    <th class="py-2 px-4 border-b">Obligaciones Financieras No Corriente</th>
                    <th class="py-2 px-4 border-b">Pasivos por Derecho No Corriente</th>
                    <th class="py-2 px-4 border-b">Proveedores Cuentas por Pagar No Corriente</th>
                    <th class="py-2 px-4 border-b">Pasivo Beneficios Empleados No Corriente</th>
                    <th class="py-2 px-4 border-b">Pasivo por Impuesto Diferido</th>
                    <th class="py-2 px-4 border-b">Provisiones No Corriente</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estadosFinancieros as $estado)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $estado->id }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->efectivo_equivalentes, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->deudores_comerciales, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->inventarios, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->activos_biologicos, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->otros_activos_corrientes, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->activos_no_corrientes_venta, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->deudores_comerciales_no_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->inversiones_asociadas_negocios, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->propiedades_planta_equipo, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->activos_por_derechos, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->propiedades_inversion, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->plusvalia, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->otros_activos_intangibles, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->activo_por_impuesto_diferido, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->otros_activos_no_corrientes, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->obligaciones_financieras_corrientes, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->pasivos_por_derecho_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->proveedores_cuentas_pagar_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->impuestos_por_pagar_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->pasivo_beneficios_empleados_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->provisiones_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->obligaciones_financieras_no_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->pasivos_por_derecho_no_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->proveedores_cuentas_pagar_no_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->pasivo_beneficios_empleados_no_corriente, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->pasivo_por_impuesto_diferido, 2) }}</td>
                    <td class="py-2 px-4 border-b">{{ number_format($estado->provisiones_no_corriente, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
