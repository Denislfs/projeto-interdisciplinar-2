<?php
include 'login2.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bikelivery - Login</title>

     <!-- Tailwind css -->
     <script src="https://cdn.tailwindcss.com"></script>

     <!-- Style -->
     <link rel="stylesheet" href="../assets/style/home.css" />
 
     <!-- Google icons -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
 
     <!-- Google fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com" />
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
</head>
<body class="bg-slate-100">
    <div class="flex items-center justify-center h-screen">
        <div class="container px-32">
            <div class="flex items-center justify-center rounded-3xl bg-white drop-shadow-2xl">
                <div class="flex items-center justify-center py-32 h-full w-2/4 bg-primary rounded-l-3xl">
                    <img src="../assets/img/man-phone.png" alt="" class="h-3/5 w-3/5">
                </div>
                <div class="w-2/4 flex flex-col items-center justify-center">
                    <div>
                        <h2>
                            Olá seja bem vindo!
                        </h2>
                    </div>
                    <div>
                        <form action="" method="post">
                            <div>
                                <label for="">
                                    <input type="text" name="email" id="email" placeholder="Insira seu seu e-mail">
                                </label>
                            </div>
                            <div>
                                <label for="">
                                    <input type="text" name="senha" id="senha" placeholder="insira a sua senha">
                                </label>
                            </div>
    
                            <div>
                                <div>
                                    <button type="submit" id="entrar">
                                        <a class="bg-primary flex items-center justify-center rounded-lg w-56 h-12 text-white">
                                           Conectar
                                        </a>
                                    </button>
                                </div>
                                <div>
                                    <a href="">Esqueci a minha senha</a>
                                    <a href="">Criar conta</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>