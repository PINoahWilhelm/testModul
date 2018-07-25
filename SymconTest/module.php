<?
require(__DIR__ . "\\pimodule.php");

    // Klassendefinition
    class SymconTest extends PISymconModule {

        // Der Konstruktor des Moduls
        // Überschreibt den Standard Kontruktor von IPS
        public function __construct($InstanceID) {
            // Diese Zeile nicht löschen
            parent::__construct($InstanceID);

            // Selbsterstellter Code
        }
 
        // Überschreibt die interne IPS_Create($id) Funktion
        public function Create() {

            parent::Create();

 
        }
 
        // Überschreibt die intere IPS_ApplyChanges($id) Funktion
        public function ApplyChanges() {
           
            parent::ApplyChanges();

        }

        public function CheckVariables () {

            // Variablen checken -und erstellen
            $switches = $this->createSwitches(array("Automatik|false|0", "Sperre|false|1"));

            $this->createOnChangeEvents(array($switches[0] . "|onAutomatikChange"), $this->InstanceID);

        }

        public function CheckScripts () {

            // Scripts checken -und erstellen


        }

        public function RegisterProperties () {


        }

        public function onAutomatikChange () {

            echo "Automatik changed :)";

        }
}

?>