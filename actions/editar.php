<?php
include_once("../config/database/database.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $sala = $_POST['sala'];
    $descrição = $_POST['descrição'];
    $nome = $_POST['nome'];
    $data = $_POST['data'];

    $sql = "UPDATE prof SET sala='$sala', descrição='$descrição', nome='$nome', dath='$data' WHERE id = ".$_GET['id'];

    $con->query($sql);
    header("Location: ../index.php");
    exit();

}

$sql ="SELECT * FROM prof WHERE id = ".$_GET['id'];
$rows = $con->query($sql);
if($rows->num_rows > 0){
    $row = $rows->fetch_assoc();
    $sala = $row['sala'];
    $descrição = $row['descrição'];
    $nome = $row['nome'];
    $data = $row['dath'];
}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<form method="POST">
    <div class="container" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Agendamento</h1>
      </div>
      <div class="modal-body">
      <div class="mb-3 form-floating">
        <input name="sala" type="text" value="<?=$sala?>" class="form-control" id="exampleFormControlInput1" placeholder="" value="" required>
        <label for="exampleFormControlInput1">Sala</label>
      </div>
      <div class="mb-3 form-floating">
        <input name="descrição" type="text" value="<?=$descrição?>" class="form-control" id="exampleFormControlInput2" placeholder="" value="" required>
        <label for="exampleFormControlInput2">Descrição</label>
      </div>
      <div class="mb-3 form-floating">
        <input name="nome" maxlength="14" value="<?=$nome?>" type="text" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
        <label for="exampleFormControlInput3">Nome</label>
      </div>
      <div class="mb-3 form-floating">
            <input name="data" maxlength="14" value="<?=$data?>" type="datetime-local" class="form-control" id="exampleFormControlInput3" placeholder="" value="" required>
            <label for="exampleFormControlInput3">Data</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">
        <i class="bi bi-calendar2-check"></i>
          Salvar Agendamento
        </button>
      </div>
    </div>
  </div>
</div>
</form>