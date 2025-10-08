<?php 
    require_once (__DIR__ . '/partials/head.view.php');
?>
<h1 class="text-center my-5">Ajout dans la liste</h1>
<form method="POST">
    <div class="container">
        <div class="form-group">
            <label for="title">Titre de la tâche :</label>
            <input class="form-control" type="text" id="title" name="title">
            <label for="description" class="form-label mt-3">Quelle tâche avez-vous à ajouter ?</label>
            <textarea class="form-control" id="description" name="description" style="height: 50px"></textarea>
        </div>
        <button type="submit" name="addTache" class="btn btn-info mt-2">Ajouter la tâche</button>
    </div>
</form>

<?php 
   require_once (__DIR__ . '/partials/footer.view.php');

