<?php
  include_once("./config/database/database.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reserva de Salas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4" class = "pai"> <i class="bi bi-calendar2-heart"> Sistema de Reserva de Salas </i></h1>

        <button type="button" class=" m-2 btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <i class="bi bi-plus-circle"></i>  
            Adicionar uma sala
        </button>

        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
    


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar uma sala</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="mb-3 form-floating">
        <input name="sala" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="" required>
        <label for="exampleFormControlInput1">Sala</label>
      </div>
      <div class="mb-3 form-floating">
        <input name="descricao" type="text" class="form-control" id="exampleFormControlInput2" placeholder="" value="" required>
        <label for="exampleFormControlInput2">Descrição</label>
      </div>
      <div class="mb-3 form-floating">
        <input name="nome" maxlength="14" type="text" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
        <label for="exampleFormControlInput3">Nome</label>
      </div>
      <div class="mb-3 form-floating">
        <input name="data" maxlength="14" type="datetime-local" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
        <label for="exampleFormControlInput3">Data</label>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Sala</th>
                        <th class="w-2/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Descrição</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Reservado por</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Data e Hora</th>
                    </tr>
                </thead>
                <tbody>
                
                    <tr class="border-b">
                        <td class="py-2 px-4 text-sm text-gray-700">Sala A101</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Reunião de planejamento</td>
                        <td class="py-2 px-4 text-sm text-gray-700">João Silva</td>
                        <td class="py-2 px-4 text-sm text-gray-700">22/05/2024 14:00</td>
                    </tr>
                    <tr class="border-b bg-gray-50">
                        <td class="py-2 px-4 text-sm text-gray-700">Sala B202</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Workshop de Marketing</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Maria Oliveira</td>
                        <td class="py-2 px-4 text-sm text-gray-700">21/05/2024 09:00</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4 text-sm text-gray-700">Sala C303</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Treinamento de TI</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Carlos Souza</td>
                        <td class="py-2 px-4 text-sm text-gray-700">20/05/2024 16:00</td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>