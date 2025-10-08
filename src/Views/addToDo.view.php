<?php 
    require_once (__DIR__ . '/partials/head.view.php');
?>
<h1>Ajout dans la liste</h1>
<form method="POST">
    <div class="container formularStyle">
        <div class="form-group">
            <label for="ToDo" class="form-label mt-3">Quelle tâche avez-vous à ajouter ?</label>
            <textarea class="form-control" id="ToDo" name="ToDo" style="height: 50px"></textarea>
            <?php 
            if(isset($arrayError['ToDo'])){
                ?>
                    <p class="text-danger"><?= $this->arrayError['ToDo']?></p>
                <?php
            }
            ?>
        </div>
        <button type="submit" name="addTache" class="btn btn-info mt-5">Ajouter</button>
    </div>
</form>
<?php 
   require_once (__DIR__ . '/partials/footer.view.php');
