<?php
    $activity = $data['activity'];
?>
<form action="<?php echo $baseUrl; ?>activity/delete" method="post">
    <input type="hidden" name="id" value="<?php echo $activity['id']; ?>">
    <h2>Você tem certeza que deseja excluir a tarefa ? </h2>
    <button name="submit" type="submit">Sim</button>
    <button type="reset">Cancelar</button>
</form>