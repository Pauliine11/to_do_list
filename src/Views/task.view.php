<?php
require_once(__DIR__ . "/partials/head.view.php");
//var_dump($myList);
?>
<h1 class="text-center my-5">La tâche</h1>

<div class="container p-3 mt-5">
    <div class="card">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Titre:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $myList->getTitle(); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $myList->getDescription(); ?></textarea>
        </div>
        <div class="col-auto">
            <a href="/modifier?id=<?= $myList->getIdTodos(); ?>" class="btn btn-primary mb-3">Modifier</a>
        </div>
    </div>
</div>
<?php
require_once(__DIR__ . "/partials/footer.view.php");
?>           