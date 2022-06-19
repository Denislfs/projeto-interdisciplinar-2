<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Estabelecimentos</title>
    <?php
        require_once('../components/header.php')
    ?>
</head>
<body>
<?php
    include '../crud/delete/deletarest2.php';
    $DataBaseService = new DataBase();

    if(isset($_GET['cnpj']) && !empty($_GET['cnpj'])) {
        $cnpj = $_GET['cnpj'];
        $DataBaseService->deletarEstabelecimento($cnpj);
    }
?>
<h2 class="text-lg font-medium leading-6 text-gray-900">Estabelecimentos cadastrados</h2>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
  <table class="w-full font-medium text-left text-gray-400 dark:text-gray-700">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-550 dark:text-gray-700">
      <tr>
        <th>CNPJ </th>
        <th>Razão Social </th>
        <th>Nome Fantasia </th>
        <th>Telefone </th>
        <th>CEP </th>
        <th>UF </th>
        <th>Cidade </th>
        <th>Bairro </th>
        <th>Rua </th>
        <th>Número </th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $database = $DataBaseService->mostrarDados(); 
          foreach ($database as $dados) {
        ?>
        <tr>
          <td><?php echo $dados['cnpj'] ?></td>
          <td><?php echo $dados['razao_social'] ?></td>
          <td><?php echo $dados['nome_fantasia'] ?></td>
          <td><?php echo $dados['telefone'] ?></td>
          <td><?php echo $dados['cep'] ?></td>
          <td><?php echo $dados['uf'] ?></td>
          <td><?php echo $dados['cidade'] ?></td>
          <td><?php echo $dados['bairro'] ?></td>
          <td><?php echo $dados['rua'] ?></td>
          <td><?php echo $dados['numero'] ?></td>
          <td>
          <div class="flex">
            <div class="flex items-center mr-4">

              <a href="deletarest.php?cnpj=<?php echo $dados['cnpj'] ?>">
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