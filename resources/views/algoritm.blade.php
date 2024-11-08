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
        <main class="flex-grow flex flex-col items-center justify-center space-y-4">
            <a href="{{ route('show') }}" class="flex items-center rounded-lg bg-[#FF2D20]/10 p-6 hover:bg-[#FF2D20]/20 transition duration-300 ease-in-out hover:scale-105 text-xl">
                <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                    <svg class="size-6 sm:size-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path d="M12 11.292L7.707 7h8.586L12 11.292zM5 12a7 7 0 0 1 14 0h2a9 9 0 0 0-18 0h2z" fill="#FF2D20"/>
                    </svg>
                </div>
                <span class="ml-4 text-base text-gray-800 dark:text-gray-200"> Click para empezar  a generar el algoritmo</span>
            </a>
        </main>
    </div>
</body>
</html>
