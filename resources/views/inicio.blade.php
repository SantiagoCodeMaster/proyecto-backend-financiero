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
                <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario</h1>
                
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div> 
        </header>

        <div class="px-6 py-4">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-4">Querido usuario</h1>
            <h3 class="mb-2">En este formulario tendrá la oportunidad de llenar los datos de la empresa que usted representa. Los datos financieros son de rigurosa seguridad, por lo mismo estos datos nadie más que usted tendrá acceso.</h3>
            <h3 class="mb-2">Como representante de su empresa, usted será el responsable de guardar los datos de sesión de inicio, guarde el número de NIT y si llega a haber un cambio del NIT, usted será el responsable de volver a actualizarlo en la web.</h3>
            <h3 class="mb-4">Tenga en cuenta que la contraseña debe ser la misma que registraron en el apartado de registro.</h3>
        </div>

        <!-- Main Form Content -->
        <main class="flex-grow flex flex-col items-center justify-center px-6">
            <form action="{{ route('formulario1') }}" method="POST" class="w-full max-w-lg space-y-4">
                @csrf
   
                <div>
                    <label for="empresa" class="block text-gray-800 dark:text-white mb-2">Nombre de la empresa:</label>
                    <textarea id="empresa" name="empresa" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="NIT" class="block text-gray-800 dark:text-white mb-2">Número de NIT:</label>
                    <textarea id="NIT" name="NIT" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="contraseña" class="block text-gray-800 dark:text-white mb-2">Contraseña:</label>
                    <textarea id="contraseña" name="contraseña" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
                </div>

                <div>
                    <label for="rublo" class="block text-gray-800 dark:text-white mb-2">Rubro:</label>
                    <textarea id="rublo" name="rublo" class="w-full border border-gray-300 dark:border-gray-700 rounded-md p-2 dark:bg-gray-800 dark:text-white"></textarea>
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
