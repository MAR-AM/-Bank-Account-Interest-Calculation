<?php
    class compteBancaire {
        private $montant;
        private $interet;

        public function __construct($montant, $interet){
            $this->montant = $montant;
            $this->interet = $interet;
        }
        public function getMontant(){
            return $this->montant;
        }
        public function modifierMontant(){
            // $this->montant += ($this->montant*$this->interet)/100;
            for ($i=0; $i < 10 ; $i++) { 
                $this->montant += ($this->montant*$this->interet)/100;
            }
            return "Afficher le montant de chaque compte au bout de 10 ans est : ".$this->montant;
        }
        
    }


    $account1 = new compteBancaire(200,20) ;
    echo $account1->modifierMontant();

    echo "<br>";

    $account2 = new compteBancaire(1000,2) ;
    echo $account2->modifierMontant();

?>
