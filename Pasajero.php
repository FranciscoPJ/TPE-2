<?php 
class Pasajero{
    
    // Atributos
    private $nombre;
    private $apellido;
    private $nroDni;
    private $telefono;
    private $nroAsiento;
    private $nroTicketPasaje;

    /** Metodo Constructor.
     * Recibe como parametros los valores de los atributos. Retorna vacio
     * @param STRING $nombre
     * @param STRING $apellido
     * @param INT $nroDni
     * @param INT $telefono
     * @param INT $nroAsiento
     * @param INT $nroTicketPasaje
     */
    public function __construct($nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->nroDni = $nroDni;
        $this->telefono = $telefono;
        $this->nroAsiento = $nroAsiento;
        $this->nroTicketPasaje = $nroTicketPasaje;
        
    }

    // metodos get---------------------------------------------------------------
	public function getNombre() {
		return $this->nombre;
	}

    /** Metodo de Acceso Get.
     * Retorna un apellido
     * @return STRING */
    public function getApellido(){
        return $this->apellido;
    }

    /** Metodo de Acceso Get.
     * Retorna un numero de DNI
     * @return INT */
    public function getNroDni(){
        return $this->nroDni;
    }

    /** Metodo de Acceso Get.
     * Retorna un numero de una persona
     * @return STRING */
    public function getTelefono(){
        return $this->telefono;
    }

	public function getNroAsiento() {
		return $this->nroAsiento;
	}

	public function getNroTicketPasaje() {
		return $this->nroTicketPasaje;
	}

    // metodos set---------------------------------------------------------------
	public function setNombre($value) {
		$this->nombre = $value;
	}

    /** Metodo de Acceso Set.
     * Recibe como parametro un nuevo apellido. 
     * Retorna un nuevo apellido de una persona
     * @param STRING $nuevoApellido
     * @return STRING */
    public function setApellido($nuevoApellido){
        return $this->apellido = $nuevoApellido;
    }

    /** Metodo de Acceso Set.
     * Recibe como parametro un nuevo numero DNI. 
     * Retorna un nuevo numero de DNI de una persona
     * @param INT $nuevoDni
     * @return INT */
    public function setNroDni($nuevoDni){
        return $this->nroDni = $nuevoDni;
    }

    /** Metodo de Acceso Set.
     * Recibe como parametro un nuevo telefono. 
     * Retorna un nuevo numero de telefono de una persona
     * @param INT $nuevoNumero
     * @return INT */
    public function setTelefono($nuevoNumero){
        return $this->telefono = $nuevoNumero;
    }

	public function setNroAsiento($value) {
		$this->nroAsiento = $value;
	}

	public function setNroTicketPasaje($value) {
		$this->nroTicketPasaje = $value;
	}

    /** Metodo toString.
     * Retorna una cadena de carateres de todos los atributos
     * @return STRING */
    public function __toString(){
        
        $info = "\n     Nombre de Pasajero: " . $this->getNombre() . ".\n";
        $info .= "     Apellido de Pasajero: " . $this->getApellido() . ".\n";
        $info .= "     Numero de DNI de Pasajero: " . $this->getNroDni() . ".\n";
        $info .= "     Numero de telefono de Pasajero: " . $this->getTelefono() . ".\n";
        $info .= "     Numero de Asiento: " . $this->getNroAsiento() . ".\n";
        $info .= "     Numero de Ticket de Pasaje del Viaje: " . $this->getNroTicketPasaje() . ".\n";

        return $info;

    }

    // darPorcentajeIncremento() -----------------------------------------------------
    // retorna el porcentaje que debe aplicarse como incremento según las características del pasajero
    public function darPorcentajeIncremento(){
        
        $porcentaje = 0;

        return $porcentaje;
        
    }

}
?>