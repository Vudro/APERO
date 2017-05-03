<div class="content">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">ADMIN DE CONTACT</h1>
            <form role="form" action="" method="post">
                <a href="?c=admin&a=contact" class="button">Retour</a>
<!--                pour envoyer un email de réponse-->
                <label>Email de <?php echo $msg['email'] ?></label>
                <label>Message reçu : <?php echo $msg['message'] ?></label>
                <label for="message">Message :</label>
                <textarea class="u-full-width" id="message" name="message"></textarea>
                <button class="button-primary" type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</div>