<?php
require_once(__DIR__ . "/partials/head.view.php");
?>

<h1 class="text-center my-5">Modifier une tâche</h1>
<form method="POST">
    <div class="container">
        <div class="form-group">
            <label for="title">Titre de la tâche :</label>
            <input class="form-control" type="text" id="title" name="title" value="<?= $myTask->getTitle()?>">
            <label for="description" class="form-label mt-3">Quelle tâche avez-vous à ajouter ?</label>
            <textarea class="form-control" id="description" name="description" style="height: 50px"><?= $myTask->getDescription()?></textarea>
            <label for="status">Status :</label>
            <input class="form-control" type="text" id="status" name="status" value="<?= $myTask->getStatus()?>">
        </div>
        <button type="submit" name="editTask" class="btn btn-info mt-2">Modifier</button>
    </div>
</form>

<?php
require_once(__DIR__ . "/partials/footer.view.php");
?>