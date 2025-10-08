<?php
require_once(__DIR__ . "/partials/head.view.php");
?>
<?php
if(isset($tasks)){
    foreach($tasks as $task)
    {
        ?>
        <div class="container" style="width: 600px">
            <div class="card my-2">
                <div class="card-header text-bg-secondary">
                    <?= $task->getTitle(); ?>
                </div>
                <div class="card-body">
                    <figure>
                        <blockquote class="blockquote" style="height: 15px">
                            <p><?= $task->getDescription(); ?></p>
                        </blockquote>
                    </figure>
                </div>
            </div>
        </div>
        <?php
    }
}

require_once(__DIR__ . "/partials/footer.view.php");
?>