<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
</head>

<body class="home">
    <header>
        <nav id="mainNavbar" class="navbar navbar-light bg-white navbar-expand-md">
            <div class="container px-0">
                <div class="col">
                    <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
                        <img src="<?php echo IMAGES; ?>/logo.svg" width="197" alt="image" />
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainNav">
                    <div class="navbar ml-auto my-4 my-md-0">
                        <a class="btn btn-primary ml-md-3 d-block d-md-inline" href="<?php echo admin_url(); ?>">LOGIN</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>