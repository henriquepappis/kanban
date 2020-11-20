<?php
    $activity = $data['activity'];
?>
<form action="<?php echo $baseUrl; ?>activity/delete" method="post">
    <input type="hidden" name="id" value="<?php echo $activity['id']; ?>">
    <h2>Você tem certeza que deseja excluir a tarefa ? </h2>
    <button name="submit" type="submit">Sim</button>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">Cancelar</button>
</form>

<script>
    $(document).ready(function() {
        $( ".close" ).click(function() {
            $(this).modal('hide');
            window.history.back();
        });
    });
</script>