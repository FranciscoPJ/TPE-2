<?php

class Pasajero_Standard extends Pasajero{

    //atributo
    private $incrementoStandard;

    // __contructor
	public function __construct($nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje) {

        parent::__construct($nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje);

        $this->incrementoStandard = 10;
	}

    // get-------------------------------------------------
    public function getIncrementoStandard() {
		return $this->incrementoStandard;
	}

    // set---------------------------------------------------
	public function setIncrementoStandard($value) {
		$this->incrementoStandard = $value;
	}

    // __toString()
    public function __toString(){
        return parent::__toString();
    }

    public function darPorcentajeIncremento(){
        
        $porcentaje = parent::darPorcentajeIncremento() + $this->getIncrementoStandard();

        return $porcentaje;
        
    }

}
?>