<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>
<?php
if ( have_posts() ) :
     while ( have_posts() ) : the_post(); ?>

          <h2><?php the_title()?></h2>
          <?php the_content() ?>
          <a href="<?php the_permalink()?>">Lees meer</a>
          <hr>
     <?php endwhile;


else :
     echo '<p>There are no posts!</p>';

endif;
?>
