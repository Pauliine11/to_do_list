<?php
require_once(__DIR__ . "/partials/head.view.php");
?>
<?php
if(isset($tasks)){
            foreach($tasks as $task)
            {
                ?>
                    <div class="card my-2 text-bg-secondary">
                        <div class="card-header">
                            <?= $task->getTitle(); ?>
                        </div>
                        <div class="card-body">
                            <figure>
                            <blockquote class="blockquote">
                                <p><?= $task->getDescription(); ?></p>
                            </blockquote>
                            </figure>
                            <?php if(isset($_POST['todos']) && $_POST['todos']['id_todos'] === $task->getIdTodos()){
                                ?>
                                <a class="btn btn-warning"  href="/modifTache?id=<?= $task->getIdTodos() ?>">Modifier</a>
                                <?php
                            } 
                            if(isset($_POST['todos'])){
                                ?>
                                <form action="/supprimerTache" method="POST">
                                    <input type="hidden" name="id" value="<?= $task->getIdTodos() ?>">
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
            }
        }
<?php
require_once(__DIR__ . "/partials/footer.view.php");