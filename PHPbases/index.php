<?php

    // -> Ceci est un commentaire... Sur une ligne

    # -> ceci est un autre commentaire... Sur une ligne egalement

    /* Ceci est un commentaire
        dur plusieurs lignes...
    */

    # - chaine de caractere (string)
        $maVariable_str =   "test";
    # - entier (int)
        $maVar_int      =   3;
    # - tableau (array)
        $myTab          =   array(1,2,3);
    # - tableau (array)
        $myTab2          =   array(  'un'    => 1,
                                    'deux'  => 2,
                                    'trois' => 3
                            );
    # - objet (Object)
        $myObj              =   new stdClass();
        $myObj->maVar_int   =   $maVar_int;
        $myObj->titre       =   $maVariable_str;

    # Cas N°1
    echo '<h1>1. '.$maVariable_str.'</h1>';
    # Cas N°2
    echo '<h1>2a. $maVariable_str</h1>';
    echo "<h1>2b. $maVariable_str</h1>";
    # Cas N°3
?>
    <h1>3. <?php echo $maVariable_str; ?></h1>
<?php
/* var_dump
    "Jette moi la variable !"
    permet d'afficher le contenu d'une variable
    ainsi que sont type (entier, tableau, obj, etc..)
*/

# Foreach permet d'effectuer un traitement specifique sur chacune des entrees d'un tableau...
foreach ($myTab2 as $key => $value) {
    echo "<pre>";
    var_dump($key.'=>'.$value);
    echo "</pre>";

    if ($key == "un")
    {
        $classCss = "first";
    }
    else {
        $classCss = "";
    }
    # - Ligne 56 est l'ecritre raccourcie de la ligne 48 à 54
    $classCss = ($key == "un") ? 'first' : '' ;
    ?>
        <article class="<?php echo $classCss; ?>">
            <?php // En php, on peut faire un echo comme ça : ?>
            <h2>Article <?= $value; ?></h2>
        </article>
    <?php
}

for ($i=0; $i < 3; $i++) {
    $classCss = ($i == 0) ? 'first' : '' ;
    ?>
        <article class="<?php echo $classCss; ?>">
            <?php // En php, on peut faire un echo comme ça : ?>
            <h2>Article <?= $myTab[$i]; ?></h2>
        </article>
    <?php
}

$a = 1;
while ($a <= 10) {
    echo $a."...Bonjour<br>";
    $a = $a + 2;
}

$monTest = "Je suis le meilleur...";

function maFonction($cpt = 3, $sufixe = "Moi", $monTest) {
    //global $monTest;
    //  $monTest = "Il est le meilleur...";
    for ($i=0; $i < $cpt; $i++) {
        echo "Bonjour... Fonction - $sufixe // $monTest<br>";
    }
}
maFonction(3, 'toi', $monTest);


/**
 * Definition d'objet...
 */
class couteauSuisse
{
    // -> Methode
    function __construct($elements)
    {
        $this->lames = $elements;
    }

    function quellesSontMesLames()
    {
        foreach ($this->lames as $key => $value) {
            echo "Lame $key : $value<br>";
        }
    }
}

?>
<h1>Je pars à une soirée !</h1>
<?php
$elements = array('lame', 'decapsuleur', 'tire-bouchon');
$monCouteau = new couteauSuisse($elements);
$monCouteau->quellesSontMesLames();
?>
<h1>Je pars en camping !</h1>
<?php
$elements = array('lame', 'grande lame', 'briquet', 'cure-dents', 'machette');
$monCouteauDeSurvie = new couteauSuisse($elements);
$monCouteauDeSurvie->quellesSontMesLames();






/*echo "<pre>";
var_dump($monCouteau, $monCouteauDeSurvie);
echo "</pre>";
*/
