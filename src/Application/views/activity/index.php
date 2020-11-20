<?php
    $baseUrl = "http://$_SERVER[HTTP_HOST]/";
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.2/jquery.modal.min.js"></script>
<link rel="stylesheet" href="../assets/css/main.css">
<div class="kanban__title">
    <h1><i class="material-icons">check</i> Gerenciamento de Atividades</h1>
</div>
<menu class="kanban">
    <button><i class="material-icons">add_task</i> Atividades</button>
    <a href="<?php echo $baseUrl; ?>user/index">
        <button>
            <i class="material-icons">person_add</i> Users
        </button>
    </a>
</menu>
<div class="dd">
    <ol class="kanban To-do">
        <div class="kanban__title">
            <h2><i class="material-icons">report_problem</i> To Do</h2>
        </div>
        <?php
            foreach ($data['activities'] as $activity) {
                if ($activity['status_id'] == 1) {
                    echo "    <li class='dd-item' data-id='".$activity['id']."'>";
                    echo "        <div class='text text-center'> " . $activity['activity_name'] . "</div>";
                    echo "        <div class='text text-center'> " . $activity['login'] . "</div>";
                    echo "        <div class='actions'>";
                    echo "            <a href='" . $baseUrl . "activity/show/" . $activity['id'] . "' rel='modal:open'>";
                    echo "                <i class='material-icons'>edit</i>";
                    echo "            </a>";
                    echo "            <a href='" . $baseUrl . "activity/remove/" . $activity['id'] . "' rel='modal:open'>";
                    echo "                <i class='material-icons'>delete</i>";
                    echo "            </a>";
                    echo "        </div>";
                    echo "    </li>";
                }
            }
        ?>

    <?php
        echo "<div class='actions'>";
        echo "    <a href='" . $baseUrl . "activity/new" . "' rel='modal:open'>";
        echo "      <button class='addbutt'><i class='material-icons'>control_point</i> Add new</button>";
        echo "  </div>";
    ?>
    </ol>

    <ol class="kanban progress">
        <h2><i class="material-icons">build</i> Doing</h2>
        <?php
            foreach ($data['activities'] as $activity) {
                if ($activity['status_id'] == 2) {
                    echo "    <li class='dd-item' data-id='".$activity['id']."'>";
                    echo "        <div class='text text-center'> " . $activity['activity_name'] . "</div>";
                    echo "        <div class='text text-center'> " . $activity['login'] . "</div>";
                    echo "        <div class='actions'>";
                    echo "            <a href='" . $baseUrl . "activity/show/" . $activity['id'] . "' rel='modal:open'>";
                    echo "                <i class='material-icons'>edit</i>";
                    echo "            </a>";
                    echo "            <a href='" . $baseUrl . "activity/remove/" . $activity['id'] . "' rel='modal:open'>";
                    echo "                <i class='material-icons'>delete</i>";
                    echo "            </a>";
                    echo "        </div>";
                    echo "    </li>";
                }
            }
        ?>
    </ol>

    <ol class="kanban  Done">
        <h2><i class="material-icons">check_circle</i> Done</h2>
        <?php
            foreach ($data['activities'] as $activity) {
                if ($activity['status_id'] == 3) {
                    echo "    <li class='dd-item' data-id='".$activity['id']."'>";
                    echo "        <div class='text text-center'> " . $activity['activity_name'] . "</div>";
                    echo "        <div class='text text-center'> " . $activity['login'] . "</div>";
                    echo "        <div class='actions'>";
                    echo "            <a href='" . $baseUrl . "activity/show/" . $activity['id'] . "' rel='modal:open'>";
                    echo "                <i class='material-icons'>edit</i>";
                    echo "            </a>";
                    echo "            <a href='" . $baseUrl . "activity/remove/" . $activity['id'] . "' rel='modal:open'>";
                    echo "                <i class='material-icons'>delete</i>";
                    echo "            </a>";
                    echo "        </div>";
                    echo "    </li>";
                }
            }
        ?>
    </ol>
</div>