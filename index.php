<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
        <?php 
            function chargerClasse($class){
                require $class.'.php';
            }
            spl_autoload_register('chargerClasse');

            $perso_test = new Personnage(Personnage::FORCE_PETITE);
            $perso_test2 = new Personnage(Personnage::FORCE_PETITE);

            echo'method statique parler : ';
            $perso_test -> parler();
            echo'<hr>';
            echo'method frapper($perso2) : ';
            $perso_test->frapper($perso_test2);
            echo'le perso 1 a frapper le perso 2';
            echo'<hr>';
            // SCRIPT DE COMBAT
            $perso1 = new Personnage(Personnage::FORCE_PETITE);
            $perso2 = new Personnage(Personnage::FORCE_PETITE);
            echo '<h1>Script de combat</h1>';
            $perso1 ->setForce(50);
            $perso2 ->setForce(25);
            $perso1->setExperience(25);
            $perso2->setExperience(0);
            $perso1->frapper($perso2);
            $perso1 -> gagnerExperience();
            $perso2->frapper($perso1);
            $perso2 -> gagnerExperience();
            echo'<br>';
            echo 'Le personnage 1 a ', $perso1->force(), ' de force, contrairement au personnage 2 qui a ', $perso2->force(), ' de force.';
            echo '<br>';
            echo 'Le personnage 1 a ', $perso1->experience(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->experience(), ' d\'expérience.';
            echo '<br>';
            echo 'Le personnage 1 a ', $perso1->degats(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->degats(), ' de dégâts.';
            echo '<hr>';
            //CONSTRUCTOR
            $perso4= new Personnage(Personnage::FORCE_MOYENNE);
            $perso3 = new Personnage(Personnage::FORCE_GRANDE);
            echo 'Le personnage 3 a ', $perso1->force(), ' de force, contrairement au personnage 4 qui a ', $perso2->force(), ' de force.';
        ?>
        </div>
    </div>
</div>
    
</body>
</html>