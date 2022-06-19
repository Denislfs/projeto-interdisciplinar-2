<?php
  require_once('../components/header.php');
  include '../crud/update/atualizaentreg2.php';

  $DataBaseService = new DataBase();
     
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Entregadores</title>
</head>
<body>
<h2 class="text-lg font-medium leading-6 text-gray-900">Entregadores(as) cadastrados</h2>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
  <table class="w-full font-medium text-left text-gray-400 dark:text-gray-700">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-550 dark:text-gray-700">
      <tr>
        <th>Id </th>
        <th>Nome </th>
        <th>CPF </th>
        <th>Celular </th>
        <th>Email </th>
        <th>Data de Nascimento </th>
        <th>Endereço </th>
        <th>Número </th>
        <th>Bairro </th>
        <th>Cidade </th>
        <th>Complemento </th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $dados = $DataBaseService->mostrarDados(); 
          foreach ($dados as $dados) {
        ?>
        <tr>
          <td><?php echo $dados['id'] ?></td>
          <td><?php echo $dados['nome'] ?></td>
          <td><?php echo $dados['cpf'] ?></td>
          <td><?php echo $dados['celular'] ?></td>
          <td><?php echo $dados['email'] ?></td>
          <td><?php echo $dados['data_nasc'] ?></td>
          <td><?php echo $dados['endereco'] ?></td>
          <td><?php echo $dados['numero'] ?></td>
          <td><?php echo $dados['bairro'] ?></td>
          <td><?php echo $dados['cidade'] ?></td>
          <td><?php echo $dados['complemento'] ?></td>
          <td>
          <div class="flex">
            <div class="flex items-center mr-4">

              <a href="editentreg.php?editId=<?php echo $dados['id'] ?>" style="color:green">
              <svg class="h-8 w-8 text-green-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
              </svg>
            </div>
          </div>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<?php
  require_once('../components/footer.php');
?>