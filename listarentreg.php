<?php
/*chamando a header*/
require_once('header.php')
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Entregadores</title>
</head>
<body>
  <div class="container ml-10 mx-auto pt-10">
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-1">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
  <!--titulo e imagem ao lado do formulário-->
  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0 ">
          <h3 class="text-lg font-medium leading-6 text-gray-900 mr-12">Atualização de Entregadores(as)</h3>
           <!-- <img class="leading-6 mt-12" src="src/assets/img/delivery-man-bike.png" widht="10px" height="10px">-->
          <p class="mt-1 text-sm text-gray-600"></p>
        </div>
      </div>
      <div class="mt-1 md:mt-0 md:col-span-2 lg:col-start-5">
        <!--formulario-->
        <form action="create/cadastroentreg2.php" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md ml-12">   
            <?php require_once ('./read/listarentreg2.php') ?>
          </div>
        </form>
      </div>
  <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
      <div class="border-t border-gray-200"></div>
    </div>
  </div>
</div>

<?php
require_once('footer.php');
?>
