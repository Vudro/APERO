<div class="content">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Suppression d'une création</h1>
            <form role="form" action="" method="post">
                <label>Etes-vous sur de vouloir supprimer la creation :  <?php echo $creation['name']; ?> ?</label>
                <a href="?c=admin-creationt" class="button">Non</a>
                <input type="hidden" name="delete" value="oui">
                <button class="button-primary" type="submit">Oui</button>
            </form>
        </div>
    </div>
</div>