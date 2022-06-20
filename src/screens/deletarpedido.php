<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Pedidos</title>
    <?php
        require_once('../components/header.php')
    ?>
</head>
<body>
<?php
    include '../crud/delete/deletarpedido2.php';
    $DataBaseService = new DataBase();

    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        $DataBaseService->deletarPedido($id);
    }
?>
<h2 class="text-lg font-medium leading-6 text-gray-900">Pedidos cadastrados</h2>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-8">
  <table class="w-full font-medium text-left text-gray-400 dark:text-gray-700">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-550 dark:text-gray-700">
      <tr>
        <th>Id </th>
        <th>CNPJ </th>
        <th>Categoria </th>
        <th>destinatario </th>
        <th>Valor </th>
        <th>Data do Pedido </th>
        <th>Disponível </th>
        <th>Dimensão </th>
        <th>Peso </th>
        <th>Rua </th>
        <th>Número </th>
        <th>Bairro </th>
        <th>Cidade </th>
        <th>Complemento </th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
        <?php 
          $database = $DataBaseService->mostrarDados(); 
          foreach ($database as $dados) {
        ?>
        <tr>
          <td><?php echo $dados['id'] ?></td>
          <td><?php echo $dados['cnpj'] ?></td>
          <td><?php echo $dados['id_categoria'] ?></td>
          <td><?php echo $dados['destinatario'] ?></td>
          <td><?php echo $dados['valor'] ?></td>
          <td><?php echo $dados['data_pedido'] ?></td>
          <td><?php echo $dados['disponivel'] ?></td>
          <td><?php echo $dados['dimensao'] ?></td>
          <td><?php echo $dados['peso'] ?></td>
          <td><?php echo $dados['rua'] ?></td>
          <td><?php echo $dados['numero'] ?></td>
          <td><?php echo $dados['bairro'] ?></td>
          <td><?php echo $dados['cidade'] ?></td>
          <td><?php echo $dados['complemento'] ?></td>
          <td>
          <div class="flex">
            <div class="flex items-center mr-4">

              <a href="deletarpedido.php?id=<?php echo $dados['id'] ?>">
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