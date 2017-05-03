<div class="content">
    <div class="row">
        <div class="col-12">
            <h3 class="text-center">Modification de la création : <?php echo $creation['name']; ?></h3>
            <p class="alert alert-warning">Attention toutes modifications est définitive !</p>
            <form role="form" action="" method="post" enctype="multipart/form-data">
                <label for="name">Nom</label>
                <input type="text" class="u-full-width" id="name" placeholder="Bonhomme en fil de fer" name="name" value="<?php echo $creation['name']; ?>">
                <label for="description">Description</label>
                <input type="text" class="u-full-width" id="description" placeholder="Un super bonhomme en fil de fer fait main !" name="description" value="<?php echo $creation['description']; ?>">
                <a href="?c=admin-creation"><button>Retour</button></a>
                <button type="submit" class="button-primary">Enregistrer</button>
            </form>
        </div>
    </div>
</div>