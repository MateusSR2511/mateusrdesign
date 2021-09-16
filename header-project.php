
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>Mateus Rodrigues - Designer de Marcas</title>
        <?php wp_head();?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">

    </head>

    <body>

        <header>

        <div class="container" >
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.svg" alt="Logo Mateus Rodrigues">
                <?php wp_nav_menu(array(
                    'theme_location' => 'alt-menu',
                    'menu_class' => "mateusMenu"
                ))?>
            </div>

        </header>