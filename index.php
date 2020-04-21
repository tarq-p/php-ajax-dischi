<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>php-ex-dischi-musicali</title>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/app.css">
    </head>
    <body>
        <header>
            <div class="container-header">
                <img id="logo" src="logo.png" alt="logo"/>
            </div>
        </header>


        <div class="cds-container container">
            <?php include 'data.php'; ?>

        <?php foreach ($dischi as $key => $disco) {?>
          <div class="cd">
            <img src="<?php echo $disco["poster"];?>" alt="">
              <h3><?php echo $disco["title"];?></h3>
              <span class="author"><?php echo $disco["author"];?></span>
              <span class="year"><?php echo $disco["year"];?></span>
          </div>
        <?php } ?>

        </div>

        <!-- <script id="cds-template" type="text/x-handlebars-template">

        </script> -->

        <script src="dist/js/main.js" charset="utf-8"></script>

    </body>
</html>
