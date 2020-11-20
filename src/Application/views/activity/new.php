<?php
    $users = $data['users'];
    $allStatus = $data['allStatus'];
    $baseUrl = "http://$_SERVER[HTTP_HOST]/";
?>
<form action="<?php echo $baseUrl; ?>activity/save" method="post">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Atividade</label>
    <div class="col-8">
      <input id="activity_name" name="activity_name" type="text" class="form-control input-md" required="true>
    </div>
  </div>
  <div class="form-group row">
    <label for="user_id" class="col-4 col-form-label">Usuário</label>
    <div class="col-8">
      <select id="user_id" name="user_id" class="custom-select">
      <option selected value=''>Selecione um Usuário</option>
        <?php
          foreach ($users as $user) {
              echo "<option value='" . $user['id'] . "'>" . $user['login'] . "</option>";
          }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="status_id" class="col-4 col-form-label">Status</label>
    <div class="col-8">
    <select id="status_id" name="status_id" class="custom-select">
        <option selected value=''>Selecione um Status</option>
        <?php
          foreach ($allStatus as $status) {
            echo "<option value='" . $status['id'] . "'>" . $status['status_name'] . "</option>";
          }
        ?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-success">Salvar</button>
    </div>
  </div>
</form>