<?php
class ResponsableV{

    // Atributos
    private $nroEmpleado;
    private $nroLicencia;
    private $nombreEmpleado;
    private $apellidoEmpleado;

    // Metodo Constructor

    /** Metodo Constructor.
     * Recibe como parametros los valores de los atributos. Retorna vacio
     * @param INT $numEmpleado
     * @param INT $numLicencia
     * @param STRING $nombre
     * @param STRING $apellido
     */
    public function __construct($numEmpleado, $numLicencia, $nombre, $apellido){

        // Inicializacion
        $this->nroEmpleado = $numEmpleado;
        $this->nroLicencia = $numLicencia;
        $this->nombreEmpleado = $nombre;
        $this->apellidoEmpleado = $apellido;

    }

    // Metodos de Acceso Get
    /** Metodo de Acceso Get.
     * Retorna un numero de un empleado
     * @return INT */
    public function getNroEmpleado(){
        return $this->nroEmpleado;
    }

    /** Metodo de Acceso Get.
     * Retorna un numero de una licencia
     * @return INT */
    public function getNroLicencia(){
        return $this->nroLicencia;
    }

    /** Metodo de Acceso Get.
     * Retorna un nombre
     * @return STRING */
    public function getNombreEmpleado(){
        return $this->nombreEmpleado;
    }

    /** Metodo de Acceso Get.
     * Retorna un apellido
     * @return STRING */
    public function getApellidoEmpleado(){
        return $this->apellidoEmpleado;
    }

    // Metodos de Acceso Set
    /** Metodo de Acceso Set.
     * Recibe un parametro tipo INT y retorna un nuevo numero INT
     * @param INT $nuevoNumero
     * @return INT*/
    public function setNroEmpleado($nuevoNumero){
        return $this->nroEmpleado = $nuevoNumero;
    }

    /** Metodo de Acceso Set.
     * Recibe un parametro de un nuevo numero de licencia 
     * y retorna un nuevo numero de licencia
     * @param INT $nuevaLicencia
     * @return INT*/
    public function setNroLicencia($nuevaLicencia){
        return $this->nroLicencia = $nuevaLicencia;
    }

    /** Metodo de Acceso Set.
     * Recibe un parametro tipo STRING de un nombre y retorna un nuevo nombre
     * @param STRING $nuevoNombre
     * @return STRING*/
    public function setNombreEmpleado($nuevoNombre){
        return $this->nombreEmpleado = $nuevoNombre;
    }

    /** Metodo de Acceso Set.
     * Recibe un parametro tipo STRING de un apellido y retorna un nuevo apellido
     * @param STRING $nuevoApellido
     * @return STRING*/
    public function setApellidoEmpleado($nuevoApellido){
        return $this->apellidoEmpleado = $nuevoApellido;
    }

    /** Metodo toString.
     * Retorna una cadena de carateres de todos los atributos
     * @return STRING */
    public function __toString(){
        
        $info = "     Numero de Empleado: " . $this->getNroEmpleado() . ".\n";
        $info .= "     Numero de Licencia: " . $this->getNroLicencia() . ".\n";
        $info .= "     Nombre de Empleado: " . $this->getNombreEmpleado() . ".\n";
        $info .= "     Apellido de Empleado: " . $this->getApellidoEmpleado() . ".\n\n";

        return $info;
    }
}
?>