<div class="container mt-5 pt-3">
    <div class="card">
        <div class="card-header bg-success text-white">
            <div class="row">
                <h2 class="col-md-10">Information du medicament ( <?=  ucfirst($m["nom"])  ?> )</h2>
                <div class="col-md-2 text-end">
                    <a href="?page=medicament" class="btn btn-warning">Retour</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-5">
                    <img src="images/<?= $m['image'] ?>" style="width:100%; height:200px" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title"><?= $m['nom'] ?></h5>
                        <p class="card-text"><?= $m["description"] ?>.</p>
                        <p class="card-text"><strong class="text-body-secondary">Date de fabrication</strong>: <?= date("d/m/Y", strtotime($m['fab'])) ?></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>