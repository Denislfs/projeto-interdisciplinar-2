<?php
  include '../crud/update/atualizaest2.php';
  $DataBase = new DataBase();

  if(isset($_GET['editCnpj']) && !empty($_GET['editCnpj'])) {
    $editCnpj = $_GET['editCnpj'];
    $dados = $DataBase->exibirCnpj($editCnpj);
  }

  if(isset($_POST['update'])) {
    $DataBase->atualizarEstabelecimento($_POST);
  }  
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualize o Estabelecimento</title>
    <!--Importando Script tailwindcss-->
    <script src="https://cdn.tailwindcss.com"></script>
    <!--Importando Script-->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!--Importando main js -->
    <script language="JavaScript" src="../js/main.js"></script>
    <!--Importando Script Jquery-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
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
          <h3 class="text-lg font-medium leading-6 text-gray-900">Atualize o Estabelecimento</h3>
          <img class="leading-6 mt-12 " src="../assets/img/man-phone.png">
          <p class="mt-1 text-sm text-gray-600"></p>
        </div>
      </div>
      <div class="mt-1 md:mt-0 md:col-span-2">
        <!--formulário-->
        <form action="editest.php" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-base font-medium text-gray-700">CNPJ</label>
                  <input type="number" name="cnpj" id="cnpj" value="<?php echo $dados['cnpj']; ?>" placeholder="XX.XXX.XXX/0001-XX." class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block text-base font-medium text-gray-700">Nome Fantasia</label>
                  <input type="text" name="nome_fantasia" id="nome_fantasia" value="<?php echo $dados['nome_fantasia']; ?>" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="last-name" class="block text-base font-medium text-gray-700">Razão Social</label>
                  <input type="text" name="razao_social" id="razao_social" value="<?php echo $dados['razao_social']; ?>" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="phone" class="block text-base font-medium text-gray-700">Telefone</label>
                  <input type="text" name="telefone" id="telefone" autocomplete="telefone" value="<?php echo $dados['telefone']; ?>" placeholder="(XX) XXXX-XXXX" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="postal-code" class="block text-base font-medium text-gray-700">CEP</label>
                  <input type="text" name="cep" id="cep" value="<?php echo $dados['cep']; ?>" placeholder="XXXXX-XXX" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
          
                <div class="col-span-6 sm:col-span-6 lg:col-span-3">
                  <label for="city" class="block text-base font-medium text-gray-700">Cidade</label>
                  <input type="text" name="cidade" id="cidade" value="<?php echo $dados['cidade']; ?>" autocomplete="cidade" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                  <label for="region" class="block text-base font-medium text-gray-700">UF</label>
                  <input type="text" name="uf" id="uf" value="<?php echo $dados['uf']; ?>" autocomplete="uf" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" maxlength=11>
                </div>
                
                <div class="col-span-6 sm:col-span-3 lg:col-span-5">
                  <label for="region" class="block text-base font-medium text-gray-700">Rua</label>
                  <input type="text" name="rua" id="rua" value="<?php echo $dados['rua']; ?>" autocomplete="rua" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="region" class="block text-base font-medium text-gray-700">Bairro</label>
                  <input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro']; ?>" autocomplete="bairro" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-1">
                  <label for="postal-code" class="block text-base font-medium text-gray-700">Numero</label>
                  <input type="text" name="numero" id="numero" value="<?php echo $dados['numero']; ?>" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
              
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <input type="hidden" name="cnpj" value="<?php echo $dados['cnpj']; ?>">
                <button type="submit" name="update" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" value="update">Salvar</button>
                </div>
          </div>
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