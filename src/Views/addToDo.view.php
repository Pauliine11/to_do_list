<?php 
    require_once (__DIR__ . '/partials/head.view.php');
?>
<h1>Nôtre liste</h1>
<form method="POST">
    <div class="container formularStyle">
        <div class="form-group">
            <label for="commit" class="form-label mt-3">Quelle tâche avez-vous à ajouter ?</label>
            <textarea class="form-control" id="commit" name="commit" style="height: 100px"></textarea>
            <?php 
            if(isset($arrayError['commit'])){
                ?>
                    <p class="text-danger"><?= $this->arrayError['commit']?></p>
                <?php
            }
            ?>
        </div>
        <button type="submit" name="addTache" class="btn mt-5 colorBtn">Ajouter</button>
    </div>
</form>
<?php 
   require_once (__DIR__ . '/partials/footer.view.php');
