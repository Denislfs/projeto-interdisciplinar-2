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
            alert("Atenção!!! o CNPJ precisa já estar cadastrado");
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
          <img class="leading-6 mt-12 " src="src/assets/img/shopping-cart.png">
          <p class="mt-1 text-sm text-gray-600"></p>
        </div>
      </div>
      <div class="mt-1 md:mt-0 md:col-span-2">
        <!--formulário-->
        <form action="create/cadastropedido2.php" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-base font-medium text-gray-700">CNPJ</label>
                  <input type="number" name="cnpj" id="cnpj" placeholder="XX.XXX.XXX/0001-XX." class="px-2 h-10 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="id_categoria" class="block mb-1 text-base font-medium text-gray-900 text-gray-700">Categoria</label>
                  <select id="id_categoria" name="id_categoria" class="h-10 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    <option selected>Escolha uma categoria</option>
                    <option value="1">Alimentício</option>
                  </select>
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                  <label for="valor" class="block text-base font-medium text-gray-700">Valor</label>
                  <input type="number" name="valor" id="valor" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-start-1 lg:col-end-3">
                  <label for="data" class="block text-base font-medium text-gray-700">Data</label>
                  <input type="datetime-local" name="data_pedido" id="data_pedido" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                  <label for="dimensao" class="block text-base font-medium text-gray-700">Dimensão</label>
                  <input type="number" name="dimensao" id="dimensao" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                  <label for="peso" class="block text-base font-medium text-gray-700">Peso</label>
                  <input type="number" name="peso" id="peso" autocomplete="peso" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-base font-medium text-gray-700">CEP</label>
                  <input type="text" name="cep" id="cep" placeholder="XXXXX-XXX" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
          
                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                  <label for="city" class="block text-base font-medium text-gray-700">Cidade</label>
                  <input type="text" name="cidade" id="cidade" autocomplete="cidade" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                  <label for="region" class="block text-base font-medium text-gray-700">UF</label>
                  <input type="text" name="uf" id="uf" autocomplete="uf" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" maxlength=11>
                </div>
                
                <div class="col-span-6 sm:col-span-3 lg:col-span-5">
                  <label for="region" class="block text-base font-medium text-gray-700">Rua</label>
                  <input type="text" name="rua" id="rua" autocomplete="rua" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-5">
                  <label for="complemento" class="block text-base font-medium text-gray-700">Complemento</label>
                  <input type="text" name="complemento" id="complemento" autocomplete="rua" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="region" class="block text-base font-medium text-gray-700">Bairro</label>
                  <input type="text" name="bairro" id="bairro" autocomplete="bairro" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                  <label for="postal-code" class="block text-base font-medium text-gray-700">Numero</label>
                  <input type="text" name="numero" id="numero" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
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
<?php
require_once('footer.php');
?>

