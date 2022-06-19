<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Entregador</title>
    <?php 
    require_once('../components/header.php');
    ?>
</head>
<body>
<?php
    include '../crud/delete/deletarentreg2.php';
    $DataBaseService = new DataBase();

    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $DataBaseService->deletarEntregador($id);
    }
?>
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

              <a href="deletarentreg.php?id=<?php echo $dados['id'] ?>">
              <svg class="h-6 w-6 text-red-400"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <polyline points="3 6 5 6 21 6" />  <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" /></svg>
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