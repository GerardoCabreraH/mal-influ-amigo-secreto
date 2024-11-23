<div class="flex items-center justify-center min-h-screen py-20 bg-gradient-to-t from-red-500 to-green-500">
    <div class="w-10/12 bg-white lg:w-5/12 md:w-6/12 shadow-3xl">
        <div class="absolute p-4 transform -translate-x-1/2 -translate-y-1/2 bg-gray-800 rounded-full left-1/2 md:p-8">
            <svg class="w-12 h-12 stroke-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
            </svg>
        </div>
        <form class="p-12 pt-20">
            <div class="mb-5">
                <div class="flex items-center gap-4 text-lg">
                    <svg class="absolute ml-3" width="24" viewBox="0 0 24 24">
                        <path d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z" />
                    </svg>
                    <input type="text" placeholder="Nombre del jugador" class="w-full py-2 pl-12 bg-gray-200 md:py-4 focus:outline-none">
                    <button type="button">X</button>
                </div>
            </div>
            <button type="button" class="w-full p-2 font-medium text-gray-900 uppercase bg-gradient-to-b from-gray-300 to-gray-400 md:p-4 hover:from-gray-400 hover:to-gray-500">
                Añadir Jugador
            </button>
            <button type="button" class="w-full p-2 mt-2 font-medium text-white uppercase bg-gradient-to-b from-gray-700 to-gray-800 md:p-4 hover:from-gray-800 hover:to-gray-900">
                Empezar Juego
            </button>
        </form>
        <button type="button" class="w-full p-2 mt-2 font-medium text-gray-900 uppercase bg-white border border-gray-500 md:p-4 hover:bg-gray-100">
            Reiniciar Juego
        </button>
    </div>
</div>
