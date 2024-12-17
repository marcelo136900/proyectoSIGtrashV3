<x-guest-layout>
    <div class="flex items-center justify-center h-screen bg-gradient-to-br from-blue-500 to-indigo-600">
        <div class="bg-white shadow-md rounded-lg w-full max-w-lg p-8">
            <!-- Imagen o Logo -->
            <!--div class="flex justify-center mb-4">
                <img src="https://www.google.com/imgres?q=emao%20logo&imgurl=https%3A%2F%2Flookaside.fbsbx.com%2Flookaside%2Fcrawler%2Fmedia%2F%3Fmedia_id%3D100054431142189&imgrefurl=https%3A%2F%2Fwww.facebook.com%2Fp%2FEMAO-100054431142189%2F%3Flocale%3Dfr_FR&docid=dfDkYIadPhMoHM&tbnid=TplveUf4oz_EJM&vet=12ahUKEwix5_fc9K6KAxWtvJUCHaZkIDEQM3oECGQQAA..i&w=1980&h=1980&hcb=2&ved=2ahUKEwix5_fc9K6KAxWtvJUCHaZkIDEQM3oECGQQAA" alt="Logo" class="w-20 h-20 object-contain">
            </div-->

            <!-- Título -->
            <h2 class="text-2xl font-semibold text-center text-gray-700 mb-2">
                Registro de Usuario
            </h2>
            <p class="text-center text-gray-500 mb-6">
                Completa el formulario para registrarte
            </p>

            <!-- Formulario -->
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-medium">Nombre</label>
                    <input id="name" type="text" name="name" :value="old('name')" required autofocus
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-300">
                    <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-600 text-sm font-medium">Correo Electrónico</label>
                    <input id="email" type="email" name="email" :value="old('email')" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-300">
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-600 text-sm font-medium">Contraseña</label>
                    <input id="password" type="password" name="password" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-300">
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-600 text-sm font-medium">Confirmar Contraseña</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="w-full mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-300">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-500 text-sm" />
                </div>

                <!-- Botones -->
                <div class="flex items-center justify-between">
                    <a href="{{ route('login') }}" class="text-sm text-indigo-600 hover:underline">
                        ¿Ya tienes una cuenta? Inicia sesión
                    </a>

                    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-md shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-1">
                        Registrarse
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
