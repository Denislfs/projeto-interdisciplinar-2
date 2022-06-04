<?php
require_once('header.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pedidos</title>
    <script>
        function atencao(){
            alert("Atenção!!! a página não foi finalizada, portanto os dados não serão inseridos");
        }
    </script>
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
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Cadastro de Pedidos</h3>
          <img class="leading-6 mt-12 " src="src/assets/img/boxes.png">
          <p class="mt-1 text-sm text-gray-600"></p>
        </div>
      </div>
      <div class="mt-1 md:mt-0 md:col-span-2">
        <!--formulário-->
        <form action="" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button onclick="atencao()" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Salvar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
  </div>
</div>
<?php/*
require_once('footer.php');*/
?>
