<?php
    require_once('header.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Estabelecimentos</title>
</head>
<body>
<!--titulo e imagem ao lado do formulário-->
<div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Delete Estabelecimentos</h3>
                <img class="leading-6 mt-6" src="src/assets/img/man-phone.png">
                <p class="mt-1 text-sm text-gray-600"></p>
            </div>
        </div>
        <div class="mt-1 md:mt-0 md:col-span-2">
<!-- formulário -->
        <form action="./delete/deletarest2.php" method="post">
            <div class="mb-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                    <div class="px-4 py-5 bg-white sm:p-6">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                <label for="nome" class="text-lg font-medium leading-6 text-gray-900">CNPJ:</label>
                                <input type="number" id="cnpj" name="cnpj" placeholder="Digite seu CNPJ" required autofocus class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 mt-3 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Deletar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="col">
            <p class="text-lg font-medium leading-6 text-gray-900">Estabelecimentos cadastrados</p>
                <?php
                require_once('./read/listarest.php')
                ?>
        </div>
    </div>
</div>
<?php
require_once('footer.php')
?>