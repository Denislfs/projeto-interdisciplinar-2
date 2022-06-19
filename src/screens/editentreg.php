<?php
  include '../crud/update/atualizaentreg2.php';
  $DataBase = new DataBase();

  if(isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $dados = $DataBase->exibirID($editId);
  }

  if(isset($_POST['update'])) {
    $DataBase->atualizarEntregador($_POST);
  }  
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <h3 class="text-lg font-medium leading-6 text-gray-900">Edição de Entregadores(as)</h3>
          <img class="leading-6 mt-12 " src="../assets/img/delivery-man-bike.png">
          <p class="mt-1 text-sm text-gray-600"></p>
        </div>
      </div>
      <div class="mt-1 md:mt-0 md:col-span-2">
        <!--formulario-->
        <form action="editentreg.php" method="POST">
          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-6">
                  <label for="first-name" class="block font-medium text-base text-gray-700">Nome</label>
                  <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" autocomplete="given-name" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="phone" class="block font-medium text-base text-gray-700">Celular</label>
                  <input type="tel" name="celular" id="celular" value="<?php echo $dados['celular']; ?>" autocomplete="family-name" placeholder="(XX) XXXX-XXXX"class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="email-address" class="block font-medium text-base text-gray-700">Email</label>
                  <input type="email" name="email" id="email" value="<?php echo $dados['email']; ?>" autocomplete="email" placeholder="Exemplo@exemplo.com" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="date" class="block font-medium text-base text-gray-700">Data de Nascimento</label>
                  <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $dados['data_nasc']; ?>" autocomplete="street-address" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                  <label for="cpf" class="block font-medium text-base text-gray-700">CPF</label>
                  <input type="text" name="cpf" id="cpf" value="<?php echo $dados['cpf']; ?>" autocomplete="" placeholder="XXX.XXX.XXX-XX" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" maxlength=11>
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                  <label for="cep" class="block font-medium text-base text-gray-700">CEP</label>
                  <input type="text" name="cep" id="cep" autocomplete="" placeholder="XXXXX-XXX" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" maxlength=11>
                </div>

                <div class="col-span-6">
                  <label for="rua" class="block font-medium text-base text-gray-700">Endereço</label>
                  <input type="text" name="endereco" id="rua" autocomplete="" value="<?php echo $dados['endereco']; ?>" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="number" class="block font-medium text-base text-gray-700">Número</label>
                  <input type="number" name="numero" id="numero" value="<?php echo $dados['numero']; ?>" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="neighbor" class="block font-medium text-base text-gray-700">Bairro</label>
                  <input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro']; ?>" autocomplete="" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="city" class="block font-medium text-base text-gray-700">Cidade</label>
                  <input type="text" name="cidade" id="cidade"  value="<?php echo $dados['cidade']; ?>"  class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-3 lg:col-span-3">
                  <label for="complement" class="block font-medium text-base text-gray-700">Complemento</label>
                  <input type="text" name="complemento" id="complemento" value="<?php echo $dados['complemento']; ?>" autocomplete="" class="px-2 h-8 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
              <button type="submit" name="update" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" value="update">Salvar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php
  require_once('../components/footer.php');
?>