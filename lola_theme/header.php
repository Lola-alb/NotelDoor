<!DOCTYPE html>
<html <?= language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title><?php bloginfo('name'); ?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    </head>
<body <?= body_class()?>>
    <header>
        <nav>
            <div class="navbar-logo"> <img class="al-image image-logo" src="<?php echo get_template_directory_uri() . '/assets/images/light/logo.png';?>" alt="Notel Book Logo"></div>
                <?= wp_nav_menu([
                    "theme_location" => "main-menu"
                ]);?>
        </nav>
        <a href="#" class="toggle-button" id="menu">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
		</a>
    </header>
