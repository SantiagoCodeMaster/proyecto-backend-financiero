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
                <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario, paso 7,Indicadores financieros</h1>
                
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div> 
        </header>
         
        <br>
        <!-- Main Form Content -->
        <main class="flex-grow flex flex-col items-center justify-center px-6">
            <form action="{{ route('formulario7.store') }}" method="POST" class="w-full max-w-lg space-y-4">
                @csrf
                <div class="mb-4">
                    <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha:</label>
                    <input type="date" id="fecha" name="fecha" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="razon_corriente" class="block text-sm font-medium text-gray-700">Razón Corriente:</label>
                    <input type="number" id="razon_corriente" name="razon_corriente" step="0.00000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="kwn" class="block text-sm font-medium text-gray-700">Capital de Trabajo Neto:</label>
                    <input type="number" id="kwn" name="kwn" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="prueba_acida" class="block text-sm font-medium text-gray-700">Prueba Ácida:</label>
                    <input type="number" id="prueba_acida" name="prueba_acida" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="rotacion_ctas_x_cobrar" class="block text-sm font-medium text-gray-700">Rotación Ctas. x Cobrar:</label>
                    <input type="number" id="rotacion_ctas_x_cobrar" name="rotacion_ctas_x_cobrar" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="rotacion_inventarios" class="block text-sm font-medium text-gray-700">Rotación Inventarios:</label>
                    <input type="number" id="rotacion_inventarios" name="rotacion_inventarios" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="ciclo_operacion" class="block text-sm font-medium text-gray-700">Ciclo Operación:</label>
                    <input type="number" id="ciclo_operacion" name="ciclo_operacion" step="0.000001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="rotacion_proveedores" class="block text-sm font-medium text-gray-700">Rotación Proveedores:</label>
                    <input type="number" id="rotacion_proveedores" name="rotacion_proveedores" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="ciclo_caja" class="block text-sm font-medium text-gray-700">Ciclo Caja:</label>
                    <input type="number" id="ciclo_caja" name="ciclo_caja" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="rotacion_activos" class="block text-sm font-medium text-gray-700">Rotación Activos:</label>
                    <input type="number" id="rotacion_activos" name="rotacion_activos" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="rentabilidad_operativa" class="block text-sm font-medium text-gray-700">Rentabilidad Operativa:</label>
                    <input type="number" id="rentabilidad_operativa" name="rentabilidad_operativa" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="roi" class="block text-sm font-medium text-gray-700">ROI:</label>
                    <input type="number" id="roi" name="roi" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="rentabilidad_patrimonio" class="block text-sm font-medium text-gray-700">Rentabilidad Patrimonio:</label>
                    <input type="number" id="rentabilidad_patrimonio" name="rentabilidad_patrimonio" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="margen_utilidad_bruta" class="block text-sm font-medium text-gray-700">Margen Utilidad Bruta:</label>
                    <input type="number" id="margen_utilidad_bruta" name="margen_utilidad_bruta" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="margen_utilidad_operacional" class="block text-sm font-medium text-gray-700">Margen Utilidad Operacional:</label>
                    <input type="number" id="margen_utilidad_operacional" name="margen_utilidad_operacional" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="margen_utilidad_antes_impuestos" class="block text-sm font-medium text-gray-700">Margen Utilidad Antes Impuestos:</label>
                    <input type="number" id="margen_utilidad_antes_impuestos" name="margen_utilidad_antes_impuestos" step="0.0001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="margen_utilidad_neta" class="block text-sm font-medium text-gray-700">Margen Utilidad Neta:</label>
                    <input type="number" id="margen_utilidad_neta" name="margen_utilidad_neta" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="nivel_endeudamiento" class="block text-sm font-medium text-gray-700">Nivel Endeudamiento:</label>
                    <input type="number" id="nivel_endeudamiento" name="nivel_endeudamiento" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="nivel_endeudamiento_corto_plazo" class="block text-sm font-medium text-gray-700">Nivel Endeudamiento Corto Plazo:</label>
                    <input type="number" id="nivel_endeudamiento_corto_plazo" name="nivel_endeudamiento_corto_plazo" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="nivel_endeudamiento_largo_plazo" class="block text-sm font-medium text-gray-700">Nivel Endeudamiento Largo Plazo:</label>
                    <input type="number" id="nivel_endeudamiento_largo_plazo" name="nivel_endeudamiento_largo_plazo" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="nivel_apalancamiento" class="block text-sm font-medium text-gray-700">Nivel Apalancamiento:</label>
                    <input type="number" id="nivel_apalancamiento" name="nivel_apalancamiento" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="cobertura_intereses" class="block text-sm font-medium text-gray-700">Cobertura Intereses:</label>
                    <input type="number" id="cobertura_intereses" name="cobertura_intereses" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="cobertura_deuda" class="block text-sm font-medium text-gray-700">Cobertura Deuda:</label>
                    <input type="number" id="cobertura_deuda" name="cobertura_deuda" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="costo_pasivo_total" class="block text-sm font-medium text-gray-700">Costo Pasivo Total:</label>
                    <input type="number" id="costo_pasivo_total" name="costo_pasivo_total" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="costo_deuda_financiera" class="block text-sm font-medium text-gray-700">Costo Deuda Financiera:</label>
                    <input type="number" id="costo_deuda_financiera" name="costo_deuda_financiera" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                </div>
            
                <div class="mb-4">
                    <label for="costo_patrimonio" class="block text-sm font-medium text-gray-700">Costo Patrimonio:</label>
                    <input type="number" id="costo_patrimonio" name="costo_patrimonio" step="0.00001" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
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