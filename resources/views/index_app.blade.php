<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased bg-gray-100 dark:bg-gray-900">
    <div class="min-h-screen flex flex-col">
        <header class="bg-gray-800 dark:bg-gray-900 relative">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                <h1 class="text-3xl font-bold text-white">Application Dashboard</h1>
                <div class="flex items-center space-x-4">
                    
                    <h2 class="text-xl font-semibold text-white">Artificial Financial Calculation</h2>
                </div>
            </div>
        </header>

        <main class="flex-1">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                                <!-- Login Section -->
                                <a href="{{ route('login') }}"
                                   class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-md ring-1 ring-gray-200 transition duration-300 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 hover:ring-gray-200 focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path d="M12 11.292L7.707 7h8.586L12 11.292zM5 12a7 7 0 0 1 14 0h2a9 9 0 0 0-18 0h2z" fill="#FF2D20"/>
                                        </svg>
                                    </div>
                                    <div class="pt-3 sm:pt-5">
                                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Login</h2>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            Access your account and manage your projects from here.
                                        </p>
                                    </div>
                                    <svg class="w-6 h-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                                    </svg>
                                </a>

                                <!-- Register Section -->
                                <a href="{{ route('register') }}"
                                   class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-md ring-1 ring-gray-200 transition duration-300 hover:bg-gray-50 dark:bg-gray-800 dark:ring-gray-700 hover:ring-gray-200 focus:outline-none focus:ring-2 focus:ring-[#FF2D20]">
                                    <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                        <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                            <path d="M4 12l-1-1 4-4 1 1-3 3L4 12zm1 1h12v2H5v-2zm0-4h12v2H5v-2z" fill="#FF2D20"/>
                                        </svg>
                                    </div>
                                    <div class="pt-3 sm:pt-5">
                                        <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Register</h2>
                                        <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                            Create a new account to start managing your projects.
                                        </p>
                                    </div>
                                    <svg class="w-6 h-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-800 dark:bg-gray-900 py-6 text-center text-sm text-white">
            <!-- Footer content removed -->
            <p>Sotfware version 1.0</p>
        </footer>
    </div> 
</body> 
</html>
