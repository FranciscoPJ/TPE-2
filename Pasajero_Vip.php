<?php

class Pasajero_Vip extends Pasajero{

    //atributos
    private $nroViajeroFrecuente; // int
    private $cantMillasPasajero; // int
	private $incrementoVip;
	private $incrementoVipMasMillas;

    // contructor
	public function __construct($nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje, $nroViajeroFrecuente, $cantMillasPasajero) {

        parent::__construct($nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje);

		$this->nroViajeroFrecuente = $nroViajeroFrecuente;
		$this->cantMillasPasajero = $cantMillasPasajero;
		$this->incrementoVip = 35;
		$this->incrementoVipMasMillas = 30;

	}

    // metodos get ------------------------------------------------------------------
	public function getNroViajeroFrecuente() {
		return $this->nroViajeroFrecuente;
	}

	public function getCantMillasPasajero() {
		return $this->cantMillasPasajero;
	}

	public function getIncrementoVip() {
		return $this->incrementoVip;
	}

	public function getIncrementoVipMasMillas() {
		return $this->incrementoVipMasMillas;
	}

    // metodos set ------------------------------------------------------------------
	public function setNroViajeroFrecuente($value) {
		$this->nroViajeroFrecuente = $value;
	}

	public function setCantMillasPasajero($value) {
		$this->cantMillasPasajero = $value;
	}

	public function setIncrementoVip($value) {
		$this->incrementoVip = $value;
	}

	public function setIncrementoVipMasMillas($value) {
		$this->incrementoVipMasMillas = $value;
	}

    // metodo __toString() ----------------------------------------------------------
    public function __toString(){
    
        $info = parent::__toString();
        $info .= "     Numero de Viajero Frecuente: " . $this->getNroViajeroFrecuente() . "\n";
        $info .= "     Cantidad de Millas del Pasajero: " . $this->getCantMillasPasajero() . "\n";

        return $info;

    }

	public function darPorcentajeIncremento(){
		
		// incializacion
		$millasAcumuladas = $this->getCantMillasPasajero();

		// calculo de porcentaje de un pasajero vip (10 (pasajeroComun) + 25 = 30 vip)
		$porcentaje = (parent::darPorcentajeIncremento() + $this->getIncrementoVip());

		if($millasAcumuladas > 300){
			
			$porcentaje = $this->getIncrementoVipMasMillas();

		}

		return $porcentaje;

	}
}
?>