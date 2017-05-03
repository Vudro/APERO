<div class="content">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">ADMIN DE CONTACT</h1>
            <?php echo display_message(); ?>
            <a href="<?php echo URL; ?>"><button>Retour</button></a>
            <table class="u-full-width">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Date de reception</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($a_contact as $v) { ?>
                    <tr class="<?php echo $v['status'] == 2 ? 'red' : 'blue' ?>">
                        <td><?php echo $v['id'] ?></td>
                        <td><?php echo $v['email'] ?></td>
                        <td><?php echo reduceStringLenght($v['message']) ?></td>
                        <td><?php echo $v['created_at'] ?></td>
                        <td>
                            <?php if ($v['status'] == 2 ) { ?>
                                <a href="?c=admin-contact&a=read&id=<?php echo $v['id'] ?>"><button class="button button-primary">Nouveau</button></a>
                            <?php } else { ?>
                                <a href="?c=admin-contact&a=read&id=<?php echo $v['id'] ?>"><button class="button button-primary">Déja lu</button></a>
                            <?php } ?>
                            <a href="?c=admin-contact&a=delete&id=<?php echo $v['id'] ?>"><button class="button button-primary">Supprimer</button></a>
                            <a href="?c=admin-contact&a=reponse&id=<?php echo $v['id'] ?>"><button class="button button-primary">Repondre</button></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>