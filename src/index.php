<?php
    require 'Application/autoload.php';

    use Application\core\App;
    use Application\core\Controller;

    $baseUrl = "http://$_SERVER[HTTP_HOST]/";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<body class="app">
    <div class="app-content">
        <main class="container">
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
            <?php
                $app = new App();
            ?>

        </main>
    </div>

</body>
</html>
