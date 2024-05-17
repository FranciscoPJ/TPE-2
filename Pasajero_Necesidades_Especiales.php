<?php

class Pasajero_Necesidades_Especiales extends Pasajero{

    //atributos
    private $colServicioEspecial; // coleccion String
	private $incrementoUnServicio;
	private $incrementoMasDeUnServicio;

    // contructor
	public function __construct($nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje, $colServicioEspecial) {

        parent::__construct($nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje);

		$this->colServicioEspecial = $colServicioEspecial;
		$this->incrementoUnServicio = 15;
		$this->incrementoMasDeUnServicio = 30;

	}

    // metodos get ------------------------------------------------------------------
	public function getColServicioEspecial() {
		return $this->colServicioEspecial;
	}

	public function getIncrementoUnServicio() {
		return $this->incrementoUnServicio;
	}

	public function getIncrementoMasDeUnServicio() {
		return $this->incrementoMasDeUnServicio;
	}

    // metodos set ------------------------------------------------------------------
	public function setColServicioEspecial($value) {
		$this->colServicioEspecial = $value;
	}

	public function setIncrementoUnServicio($value) {
		$this->incrementoUnServicio = $value;
	}

	public function setIncrementoMasDeUnServicio($value) {
		$this->incrementoMasDeUnServicio = $value;
	}

	private function mostrarArray($array){

        $lista = "";
        $i = 1;

        foreach($array as $objecto){
            $lista .= "       [" . $i++ . "]: " . $objecto . "\n";
        }

        return $lista;
    }

    // metodo __toString() ----------------------------------------------------------
    public function __toString(){

		$colServicios = $this->getColServicioEspecial();
    
        $info = parent::__toString();
        $info .= "     Servicios Especiales: \n" . $this->mostrarArray($colServicios) . "\n";

        return $info;

    }

	public function darPorcentajeIncremento(){
		
		// incializacion
		$colServicioEspecial = $this->getColServicioEspecial();
		$porcentajePasajeroComun = parent::darPorcentajeIncremento();

		// verificacion si el pasajero necesita 1 o mas servicios
		if(count($colServicioEspecial) == 1){
			
			// 15% porciento si solo necisita un servicio
			$porcentaje = $porcentajePasajeroComun + $this->getIncrementoUnServicio();

		}
		else {

			// 30% porciento si necisita mas de un servicio
			$porcentaje = $porcentajePasajeroComun + $this->getIncrementoMasDeUnServicio();
		}

		return $porcentaje;

	}

}
?>