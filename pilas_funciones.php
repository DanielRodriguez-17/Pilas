<?php

class PilaAutolavado {

    private $autos = array();

    public function agregarAuto($auto): void {     //push
        array_push($this->autos, $auto);
        echo "El auto '$auto' ha llegado al autolavado y se agregó a la pila.<br>";
    }

    public function lavarAuto(): mixed {     //pop
        if ($this->isEmpty()) {
            echo "No hay autos en espera, la pila está vacía.<br>";
            return null;
        } else {
            $auto = array_pop($this->autos);
            echo "El auto '$auto' ha sido lavado y retirado de la pila.<br>";
            return $auto;
        }
    }

    public function verAutoEnTope(): mixed {    //peek
        if ($this->isEmpty()) {
            echo "No hay autos actualmente en el autolavado.<br>";
            return null;
        } else {
            $tope = end($this->autos);
            echo "El siguiente auto en ser lavado es: '$tope'.<br>";
            return $tope;
        }
    }

    public function isEmpty(): bool {
        return empty($this->autos);
    }

    public function mostrarAutos(): void {
        if ($this->isEmpty()) {
            echo "No hay autos esperando en el autolavado.<br>";
        } else {
            echo "Lista de autos esperando ser lavados (de base a tope):<br>";
            foreach ($this->autos as $auto) {
                echo "- $auto<br>";
            }
        }
    }
}

//Ejemplo de uso
$autolavado = new PilaAutolavado();
$autolavado->agregarAuto("Auto A");
$autolavado->agregarAuto("Auto B");
$autolavado->agregarAuto("Auto C");
$autolavado->mostrarAutos();
$autolavado->verAutoEnTope();
$autolavado->lavarAuto();
$autolavado->lavarAuto();
$autolavado->mostrarAutos();
$autolavado->lavarAuto();
$autolavado->lavarAuto(); // Intento cuando ya no hay autos

?>