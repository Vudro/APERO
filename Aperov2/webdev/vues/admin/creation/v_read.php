<div class="content">
    <div class="row">
        <br>
        <div class="col-6 float-left">
            <a href="<?php echo URL; ?>"><button>Retour au menu principal</button></a>
        </div>
        <div class="col-6 float-right">
            <a href="?c=admin-creation&a=create"><button class="button-primary">Ajouter une création</button></a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <?php echo display_message(); ?>
            <table class="u-full-width">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Preview image</th>
                    <th>Action</th>
                </tr>

                <tbody>
                <?php foreach($a_creation as $k => $d){ ?>
                    <tr>
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['name']; ?></td>
                        <td><?php echo $d['description']; ?></td>
                        <td><img class="img-responsive" width="100" src="<?php echo URL_INC_IMG.'upload/'.$d['img_url']; ?>"></td>
                        <td>
                            <?php if($d['status'] == 2 ) { ?>
                                <button class="button" onclick="setCreationStatus(<?php echo $d['id']; ?>,1)">Cacher</button>
                            <?php } else { ?>
                                <button class="button" onclick="setCreationStatus(<?php echo $d['id']; ?>,2)">Afficher</button>
                            <?php } ?>
                            <a href="?c=admin-creation&a=update&id=<?php echo $d['id']; ?>"><button class="button">Modifier</button></a>
                            <a href="?c=admin-creation&a=delete&id=<?php echo $d['id']; ?>"><button class="button">Supprimer</button></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>