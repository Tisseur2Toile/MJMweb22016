<?php

$articles =     array(
                    array(
                        'titre'     =>  'Premier article',
                        'date'      =>  '10 septembre 2015',
                        'texte'     =>  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam sapien, laoreet sed enim non, congue ullamcorper arcu. Pellentesque at hendrerit risus,'
                    ),
                    array(
                        'titre'     =>  'Second article',
                        'date'      =>  '23 septembre 2015',
                        'texte'     =>  ' sed enim non, congue ullamcorper arcu. Pellentesque at hendrerit risus,'
                    ),
                    array(
                        'titre'     =>  'Troisieme article',
                        'date'      =>  '23 octobre 2015',
                        'texte'     =>  ' sed enim non, congue ullamcorper arcu. Pellentesque at hendrerit risus,'
                    )
                );
/*echo "<pre>";
var_dump($articles);
echo "</pre>";*/
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/foundation.min.css">
</head>
<body>
    <header>
        <div class="row">
            <div class="small-2 columns">
                <img src="https://placehold.it/171x22" alt="">
            </div>
            <nav class="small-10 columns">
                <ul class="inline-list">
                    <li><a href="">Ce que nous faisons</a></li>
                    <li><a href="">Chez nous</a></li>
                    <li><a href="">A l'Est</a></li>                        <li><a href="">Blog</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <?php foreach($articles as $k => $art) :
            $css = ($k == 0) ? 'first' : '' ;
            /*echo "<pre>";
            var_dump($css);
            echo "</pre>";*/

            ?>
        <!-- // BLOC HTML -->
        <article class="row <?php echo $css; ?>">
            <div class="small-4 columns">
                <img src="https://placehold.it/545x364" alt="">
            </div>
            <div class="small-8 columns <?php $css; ?>">
                <h2><?php echo $art['titre']; ?></h2>
                <time><?php echo $art['date']; ?></time>
                <div>
                    <?php echo $art['texte']; ?>
                </div>
                <a href="" class="button">Lire la suite</a>
            </div>
        </article>
        <div class="row">
            <hr class="small-10 small-offset-1 columns end">
        </div>
        <?php endforeach; ?>
        <!-- // FIN : BLOC HTML -->



        <div class="row">
            <div class="small-4 small-centered columns">
                <ul class="pagination">
                    <li class="current"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                </ul>
            </div>
        </div>
    </section>
    <footer>

    </footer>
</body>
</html>
