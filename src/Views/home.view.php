<?php
require_once(__DIR__ . "/partials/head.view.php");
?>
<section>
    <h1 class="text-center my-5">Les tâches</h1>
    <div class="container p-3 mt-5">
        <div class="card">
            <div class="card-body p-2">
                <!-- Liste -->
                <ul class="list-group pt-3">
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="flex-grow-1 align-self-center"></div>
                            <div>
                                <a href="/" class="btn btn-outline-success"></a>
                                <!-- Action à ajouter pour Supprimer -->
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item text-center">
                        <p><?= $myList->getTitle(); ?></p>
                        <p><?= $myList->getDescription(); ?></p>
                        <p><?= $myList->getStatus(); ?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
require_once(__DIR__ . "/partials/footer.view.php");