<?php
  include_once("./config/database/database.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reserva de Salas</title>

    <link rel="stylesheet" href="estilos.css" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4 text-center"> 
          <i class="bi bi-calendar2-heart"> 
            Sistema de Reserva de Salas 
          </i>
        </h1>

        <button type="button" class=" m-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-plus-circle"></i>  
            Fazer um agendamento
        </button>

        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
    

<form action="./actions/salvar.php" method="post">

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Fazer um agendamento</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3 ">
            <label for="exampleFormControlInput1">Sala</label>
            <input name="sala" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Sala A101" value="" required>
          </div>
          <div class="mb-3">
          <label for="exampleFormControlInput2">Descrição</label>
            <input name="descricao" type="text" class="form-control" id="exampleFormControlInput2" placeholder="Ex: Jogar playstation " value="" required>
          </div>
          <div class="mb-3">
          <label for="exampleFormControlInput3">Nome</label>
            <input name="nome" maxlength="14" type="text" class="form-control" id="exampleFormControlInput3" placeholder="Ex: Fulano de town" value="" required>
          </div>
          <div class="mb-3">
          <label for="exampleFormControlInput3">Data</label>
            <input name="data" maxlength="14" type="datetime-local" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
</form>
<table class="min-w-full bg-white">
                <thead>
                  <tr>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">Sala</th>
                        <th class="w-2/5 py-2 px-4 bg-gray-200 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">Descrição</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">Reservado por</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">Data e Hora</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-center text-xs font-semibold text-gray-700 uppercase tracking-wider">ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php
      $por_pagina = 10;
      $pagina = $_GET['pagina'] ?? 1;
      $inicio = ($pagina - 1) * $por_pagina;

      $sql = "SELECT * FROM prof ORDER BY id DESC LIMIT $inicio, $por_pagina"; 
      $rows = $con->query($sql);
      if($rows->num_rows > 0){
        while($row = $rows->fetch_assoc()){
          echo '
            <tr class="text-center">
              <th scope="row">'.$row['sala'].'</th>
              <td>'.$row['descrição'].'</td>
              <td>'.$row['nome'].'</td>
              <td>'.$row['dath'].'</td>

              <td class="text-center">
                  <a href="actions/deletar.php?id='.$row['id'].'" 
                    class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-red-100 text-red-600 hover:bg-red-200 transition"
                    title="Deletar">
                    <i class="bi bi-trash"></i>
                  </a>

                      <a href="actions/editar.php?id='.$row['id'].'" 
                        class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-600 hover:bg-blue-200 transition ml-1"
                        title="Editar">
                        <i class="bi bi-eye"></i>
                      </a>
</td>


            </tr>';
        }
      }
    ?>
    </tbody>
    <tfoot>
    <tr>
      <td colspan="4">
        
      </td>
    </tr>
  </tfoot>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>