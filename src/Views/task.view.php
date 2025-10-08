<?php
require_once(__DIR__ . "/partials/head.view.php");
var_dump($myList);
?>
<h1>La tâche</h1>

<div class="container p-3 mt-5">
        <div class="card">
            <p><?= $myList->getTitle(); ?></p>
            <p><?= $myList->getDescription(); ?></p>
            <p><?= $myList->getStatus(); ?></p>
        </div>
    </div>
<?php
require_once(__DIR__ . "/partials/footer.view.php");
?>