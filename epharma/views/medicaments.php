<div class="container mt-5 pt-3">
    <div class="card">
        <div class="card-header bg-success text-white">
            <div class="row">
                <h2 class="col-md-10">Liste des medicaments</h2>
                <div class="col-md-2 text-end">
                    <a href="?page=medicament&type=ajout" class="btn btn-warning">Ajouter</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Date peremption</th>
                        <th>Date fabrication</th>
                        <th>Quantite</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($medicaments as $m){ ?>
                    <tr>
                        <td>
                            <img src="images/<?= $m['image'] ?>" width="100" height="50" alt="">
                        </td>
                        <td><?=  $m["nom"] ?></td>
                        <td><?= $m["prix"] ?> FCFA</td>
                        <td><?= $m["description"] ?></td>
                        <td><?= date("d/m/Y", strtotime($m["peremption"]))  ?></td>
                        <td><?= date("d/m/Y" ,strtotime($m["fab"])) ?></td>
                        <td><?= $m["stock"] ?></td>
                        <td>
                            <a href="?page=medicament&info=<?= $m['id'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="?page=medicament&type=edit&id=<?= $m['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $m['id'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $m['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Etes-vous sûr de vouloir supprimer ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
                                    <a href="?page=medicament&idmedoc=<?=  $m['id'] ?>"  class="btn btn-danger">Oui</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>