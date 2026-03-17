<div class="container col-md-8 mt-5 pt-3">
    <div class="card">
        <div class="card-header bg-success text-white">
            <div class="row">
                <h2 class="col-md-10">Formulaire d'<?= $_GET["type"] == "ajout" ? "ajout" : "edition" ?> medicament</h2>
                <div class="col-md-2 text-end">
                    <a href="?page=medicament" class="btn btn-warning">Retour</a>
                </div>
            </div>
        </div>
        <div class="card-body">
           <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Nom</label>
                        <input type="text" name="nom" value="<?= isset($medoc) ? $medoc['nom'] : '' ?>" required class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Prix</label>
                        <input type="number" name="prix" value="<?= isset($medoc) ? $medoc['prix'] : '' ?>" required class="form-control">
                    </div>
                    <div class="col-md-12">
                        <label for="">Description</label>
                        <textarea  name="description" required class="form-control"><?= isset($medoc) ? $medoc['description'] : '' ?></textarea>
                    </div>
                    <div class="col-md-6">
                        <label for="">Date de fabrication</label>
                        <input type="date"  value="<?= isset($medoc) ? $medoc['fab'] : '' ?>" name="fab" required class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Date peremption</label>
                        <input type="date" value="<?= isset($medoc) ? $medoc['peremption'] : '' ?>" name="peremption" required class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Quantite en stock</label>
                        <input type="number" value="<?= isset($medoc) ? $medoc['stock'] : '' ?>" name="stock" required class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label for="">Image</label>
                        <input type="file" name="image" <?= $_GET["type"] == "ajout" ? "required" : "" ?>  class="form-control">
                    </div>
                </div>
                <?php if($_GET["type"] == "ajout"): ?>
                <button type="submit" name="ajouter" class="btn btn-success mt-3">Ajouter</button>
                <?php else: ?>
                    <button type="submit" name="modifier" class="btn btn-info mt-3">Modifier</button>
                <?php endif; ?>
           </form>
        </div>
    </div>
</div>