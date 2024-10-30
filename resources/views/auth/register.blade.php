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
        <!-- Header -->
        <header class="bg-gray-800 dark:bg-gray-900 relative shadow-md">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white tracking-tight">Registro de la empresa</h1>
                <div class="flex items-center space-x-6">
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div>   
        </header>

        <!-- Formulario -->
        <div class="flex-grow flex items-center justify-center">
            <form method="POST" action="{{ route('register.store') }}" class="bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md w-full max-w-lg">
                @csrf
                <br> 
                <!-- Nombre de la Empresa -->
                <div class="mb-4">
                    <label for="nombre_empresa" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Nombre de la Empresa</label>
                    <input id="nombre_empresa" class="block w-full mt-1 px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100" type="text" name="nombre_empresa" :value="old('nombre_empresa')" required autofocus />
                    @error('nombre_empresa')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Email</label>
                    <input id="email" class="block w-full mt-1 px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100" type="email" name="email" :value="old('email')" required />
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- NIT -->
                <div class="mb-4">
                    <label for="nit" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">NIT</label>
                    <input id="nit" class="block w-full mt-1 px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100" type="text" name="nit" :value="old('nit')" required />
                    @error('nit')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Rublo -->
                <div class="mb-4">
                    <label for="rublo" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Rublo</label>
                    <input id="rublo" class="block w-full mt-1 px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100" type="text" name="rublo" :value="old('rublo')" required />
                    @error('rublo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Password</label>
                    <input id="password" class="block w-full mt-1 px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100" type="password" name="password" required />
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 dark:text-gray-300 font-bold mb-2">Confirm Password</label>
                    <input id="password_confirmation" class="block w-full mt-1 px-4 py-2 rounded-md bg-gray-100 dark:bg-gray-700 text-gray-900 dark:text-gray-100" type="password" name="password_confirmation" required />
                </div>
            
                <div class="flex items-center justify-between mt-6">
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-green-600 text-white font-bold py-3 px-6 text-lg rounded hover:bg-green-700">
                        Registrarse
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
