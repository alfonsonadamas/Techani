<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="build/styles.css"/>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    
    <title>Login</title>
</head>
<body class="bg-blue-500">
    



    <div class="flex h-screen justify-center items-center">
        <div class="ml-90 bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-semibold mb-4">Iniciar Sesión</h2>
            <form>
                <div class="mb-4">
                    <label for="correo" class="block text-gray-700 font-medium">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Correo Electrónico" required>
                </div>
                <div class="mb-4">
                    <label for="contrasenia" class="block text-gray-700 font-medium">Contraseña:</label>
                    <input type="password" id="contrasenia" name="contrasenia" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Contraseña" required>
                </div>
                <div class="mb-4">
                    <a href="#" class="text-blue-500">¿No tienes cuenta? Regístrate</a>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Iniciar Sesión</button>
            </form>
        </div>
    </div>


</body>
</html>