<?php

class Personnage{
    private $_force;
    private $_localisation;
    private $_experience;
    private $_degats;

    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;

    public function __construct($forceInitiale){
        
        $this ->setForce($forceInitiale);

    }

    private static $_textADire ="Je vais vous tuer charogne!";

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

        if(in_array($force, [self::FORCE_PETITE,self::FORCE_MOYENNE,self::FORCE_GRANDE])){
             $this -> _force = $force;
        }
       
    }
    public function setDegats($degats){

        if(!is_int($degats)){
            trigger_error('les dégats d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if($degats > 100){
            trigger_error('les dégats d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }
        $this -> _degats = $degats;
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
    //FONCTION STATIQUE

    public static function parler(){
        echo self::$_textADire;
    }

    
}
