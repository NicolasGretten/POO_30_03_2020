<?php

class Personnage{
    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    public function parler(){
        echo 'Je suis un personnage';
    }

    public function deplacer(){

    }

    public function frapper($persoAFrapper){
        $persoAFrapper -> _degats += $this -> _force;

    }
    public function gagnerExperience(){
        $this -> _experience ++;
    }
    public function afficherExperience(){
        echo $this -> _experience;
    }
    // SETTERS
    public function setForce($force){

        if(!is_int($force)){
            trigger_error('la force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if($force > 100){
            trigger_error('la force d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }
        $this -> _force = $force;
    }

    public function setExperience($experience){

        if(!is_int($experience)){
            trigger_error('l\'experience d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if($experience > 100){
            trigger_error('l\'experience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }
        $this -> _experience = $experience;
    }
    // GETTERS
    public function force(){

        return $this -> _force;
    }
    public function experience(){

        return $this -> _experience;
    }
    public function degats(){

        return $this -> _degats += $this-> _force;
    }

    
}
$perso_test = new Personnage;
$perso_test2 = new Personnage;

echo'method parler : ';
$perso_test -> parler();
echo'<br>';
echo'method afficherExperience : ';
$perso_test -> afficherExperience();
echo'<br>';
echo'method gagnerExperience(5) : ';
$perso_test -> gagnerExperience(5);
echo'<br>';
echo'method afficherExperience : ';
$perso_test -> afficherExperience();
echo'<hr>';
echo'method frapper($perso2) : ';
$perso_test->frapper($perso_test2);
echo'le perso 1 a frapper le perso 2';
echo'<hr>';
// SCRIPT DE COMBAT
$perso1 = new Personnage;
$perso2 = new Personnage;
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