<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="build/styles.css" />
    <link rel="shortcut icon" href="img/logo blanco.png" type="image/x-icon">
    <title>Techani</title>
</head>

<body>

    <div class="h-screen flex flex-col">
        <nav class="flex h-24 items-center justify-between">
            <div class="flex items-center ">
                <div class="flex items-center border-black border-r-2 px-12">
                    <img src="img/Techani (1).png" alt="techaniLogo" width="60px" height="60px">
                    <p class="font-fuenteTechani text-azul ml-5">TECHANI</p>
                </div>
                <div>
                    <p class="font-fuentesec px-12">La salud en tus manos</p>
                </div>
            </div>

            <div class="mr-10">
                <ul class="flex items-center">
                    <li class="mx-14"><a href="registroCorreo.php">Registrarse</a></li>
                    <li><a class="mr-5 text-azulSecundario font-bold" href="login.php">Iniciar Sesion</a></li>
                    <li><a href="login.php"><img src="img/perfil 1.png" alt="" width="60" height=""></a></li>
                </ul>
            </div>

        </nav>

        <div class="flex-grow flex flex-col items-end justify-center bg-cover bg-center"
            style="background-image: url(img/Fondo_techani2.webp);">
            <div class="w-5/12" data-aos="fade-up">
                <div class="h-1 w-32 bg-azulBorde">
                </div>
                <div class="my-3 mr-14">
                    <h3 class="font-bold text-4xl mb-2 text-white">¿QUÉ ES TECHANI?</h3>
                    <p class="text-3xl text-white">En Techani, entendemos a los usuarios y la importancia de brindar una
                        experiencia integral en el
                        control y monitoreo de la diabetes tipo 1 y 2.</p>
                    <div class="flex justify-around mt-10">
                        <a class="bg-amarillo px-7 py-1 rounded-lg" href="registroCorreo.php">Registrarse</a>
                        <a class="bg-amarillo px-7 py-1 rounded-lg" href="login.php">Iniciar Sesion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>