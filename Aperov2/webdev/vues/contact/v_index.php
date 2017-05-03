<h1 class="text-center">Contact</h1>
<p>Bonjour, vous pouvez me laisser un commentaire ou me poser des questions ici, je vous répondrai sur votre adresse mail. Merci.</p>
<form role="form" action="" method="post">
    <label for="mail">Email :</label>
    <input class="u-full-width" id="mail" type="email" name="mail" value="<?php if(isset($_POST['mail'])){ echo $_POST['mail']; } ?>">
    <label for="message">Message :</label>
    <textarea class="u-full-width" id="message" name="message"><?php if(isset($_POST['message'])){ echo $_POST['message']; } ?></textarea>
    <button class="button-primary" type="submit">Envoyer</button>
    <?php echo display_message(); ?>
</form>