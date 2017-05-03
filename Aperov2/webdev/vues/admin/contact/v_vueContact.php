<div class="content">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">ADMIN DE CONTACT</h1>
            <a href="?c=admin-contact"><button>Retour</button></a>
<!--            --><?php //pr($vue); ?>
            <h4>Message de : <?php echo $vue['email']; ?> le <?php echo $vue['created_at']; ?></h4>
            <span class="text-justify">
                <?php echo $vue['message']; ?>
            </span>
        </div>
    </div>
</div>