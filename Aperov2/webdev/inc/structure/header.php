<!DOCTYPE html><html lang="fr"><head>    <meta charset="utf-8">    <title><?php echo $param_web_title; ?></title>    <meta name="description" content="">    <meta name="author" content="">    <meta name="viewport" content="width=device-width, initial-scale=1">    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">    <link rel="stylesheet" href="<?php echo URL_INC_CSS; ?>normalize.css" type="text/css"/>    <link rel="stylesheet" href="<?php echo URL_INC_CSS; ?>style2.css" type="text/css"/>    <link rel="icon" type="image/png" href="<?php echo URL_INC_IMG; ?>favicon.png">    <script src="<?php echo URL_INC_JS; ?>jquery-3.1.1.min.js"></script>    <script src="<?php echo URL_INC_JS; ?>my_js.js"></script>    <script src="<?php echo URL_INC_JS; ?>ajax.js"></script></head><body><header class="header text-center">    <div class="container">        <div class="row">            <div class="twelve columns text-center">                <a class="logo" href="<?php echo URL; ?>"><h1><?php echo $param_web; ?></h1></a>            </div>        </div>    </div>    <nav id="navigation" class="navbar">        <div class="container no-padding">            <div class="row">                <div class="twelve columns">                    <ul id="menu" class="navbar-list">                        <li class="navbar-item">                            <a class="navbar-link" <?php echo empty($_REQUEST['c']) || $_REQUEST['c'] == 'home' ? 'class="active"' : '' ?>  href="./">Accueil</a>                        </li>                        <li class="navbar-item">                            <a class="navbar-link" <?php echo isset($_REQUEST['c']) && $_REQUEST['c'] == 'presentation' ? 'class="active"' : '' ?> href="?c=presentation">Présentation</a>                        </li>                        <li id="logo_cache" class="navbar-item" style="display: none;">                            <a class="navbar-link logo img-responsive"><img class="logo_menu" src="<?= URL_INC_IMG ?>logo_fb.jpg"></a>                        </li>                        <li class="navbar-item">                            <a class="navbar-link" <?php echo isset($_REQUEST['c']) && $_REQUEST['c'] == 'evenement-atelier' ? 'class="active"' : '' ?> href="?c=evenement-atelier">Evènement/Atelier</a>                        </li>                        <li class="navbar-item">                            <a class="navbar-link" <?php echo isset($_REQUEST['c']) && $_REQUEST['c'] == 'contact' ? 'class="active"' : '' ?> href="?c=contact">Contact</a>                        </li>                        <?php if(userIsConnected()){ ?>                            <li class="navbar-item">                                <div class="dropdown navbar-link">                                    <span>Administration</span>                                    <div class="dropdown-content">                                        <a href="?c=admin-creation">Admin création</a>                                        <a href="?c=admin-contact">Admin contact</a>                                        <a href="?c=admin&a=logout">Déconnexion</a>                                    </div>                                </div>                            </li>                        <?php } ?>                    </ul>                </div>            </div>        </div>    </nav></header><?php echo  display_message(true); ?><div class="container">