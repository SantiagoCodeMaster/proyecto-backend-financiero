<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <main class="flex-1 py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <p> Carga tus informes financieros y recibe análisis detallados con indicadores clave y datos macroeconómicos para evaluar tu salud financiera y potencial de crecimiento..</p>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
                        <!-- Login Section -->
                        <a href="{{ route('formulario1') }}"
                        @csrf
                         
                            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <path d="M12 11.292L7.707 7h8.586L12 11.292zM5 12a7 7 0 0 1 14 0h2a9 9 0 0 0-18 0h2z" fill="#FF2D20"/>
                                </svg>
                            </div>
                            <div class="pt-3 sm:pt-5">
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Plataforma de Análisis Financiero para Empresas,</h2>
                                <p class="mt-4 text-sm text-gray-600 dark:text-gray-400">
                                     Procceder a registrar los datos 
                                </p>
                            </div>
                            <svg class="w-6 h-6 shrink-0 stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                            </svg>
                        </a>
</x-app-layout>
 