<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    @vite('resources/css/app.css')
    <style>
        /* Estilo para el mensaje emergente */
        .alert {
            display: none; /* Oculto por defecto */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #d4edda; /* Fondo verde claro */
            color: #155724; /* Texto verde oscuro */
            padding: 20px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        .alert.show {
            display: block; /* Mostrar cuando se activa */
        }
    </style>
    <script>
        function showAlert(event) {
            event.preventDefault(); // Evita el envío del formulario para mostrar la alerta
            
            // Muestra el mensaje emergente
            document.getElementById('alert').classList.add('show');
            
            // Después de mostrar la alerta, puedes proceder con el envío del formulario
            setTimeout(() => {
                document.getElementById('formulario').submit();
            }, 1000); // Espera 1.5 segundos antes de enviar el formulario
        }
    </script>
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <header class="bg-gray-800 dark:bg-gray-900 relative shadow-md">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white tracking-tight">Llenar el formulario ultimo paso,Cliente</h1>
                
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div> 
            </div> 
        </header>
     
        <br> 
        <!-- Main Form Content -->
        <main class="flex-grow flex flex-col items-center justify-center px-6">
            <form id="formulario" action="{{ route('formulario_cliente.store') }}" method="POST" class="w-full max-w-lg space-y-4">
                @csrf
  
                <label for="nombre_cliente">Nombre del Cliente:</label>
                <input type="text" id="nombre_cliente" name="nombre_cliente" required>
                <br>
                <label for="cedula_nit_cliente">Cédula o NIT:</label>
                <input type="number" id="cedula_nit_cliente" name="cedula_nit_cliente" required>
                <br>
                <label for="compras_mes">Compras del Mes:</label>
                <input type="number" id="compras_mes" name="compras_mes" step="0.01" required>
                
                <div class="flex justify-end">
                    <button type="submit" onclick="showAlert(event)" class="bg-green-600 text-blue-400 font-bold py-3 px-6 text-lg rounded hover:bg-green-700">
                        Siguiente
                    </button>
                </div>
                
            </form>

            <!-- Mensaje emergente -->
            <div id="alert" class="alert">
                Datos correctamente guardados
            </div>
        </main>

        <!-- Footer (optional) -->
        <footer class="bg-gray-800 dark:bg-gray-900 text-gray-300 py-4 text-center">
            <p>&copy; 2024 Your Company Name. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
