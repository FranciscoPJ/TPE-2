<?php
/* tpe-1
    Importante: Deben enviar el link a la resolución en su 
    repositorio en GitHub del ejercicio.

    La empresa de Transporte de Pasajeros “Viaje Feliz” quiere registrar 
    la información referente a sus viajes. De cada viaje se precisa 
    almacenar el código del mismo, destino, cantidad máxima de pasajeros 
    y los pasajeros del viaje.

    Realice la implementación de la clase Viaje e implemente los métodos 
    necesarios para modificar los atributos de dicha clase (incluso los datos de los
    pasajeros). Utilice clases y arreglos  para   almacenar la información 
    correspondiente a los pasajeros. 
    Cada pasajero guarda  su “nombre”, “apellido” y “numero de documento”.

    Implementar un script testViaje.php que cree una instancia de 
    la clase Viaje y presente un menú que permita cargar la información del viaje, 
    modificar y ver sus datos.

    Modificar la clase Viaje para que ahora los pasajeros sean un objeto que tenga los
    atributos nombre, apellido, numero de documento y teléfono. El viaje ahora contiene 
    una referencia a una colección de objetos de la clase Pasajero. 
    También se desea guardar la información de la persona responsable de realizar 
    el viaje, para ello cree una clase ResponsableV que registre el número de empleado,
    número de licencia, nombre y apellido. La clase Viaje debe hacer referencia 
    al responsable de realizar el viaje.

    Implementar las operaciones que permiten modificar el nombre, apellido y 
    teléfono de un pasajero. Luego implementar la operación que agrega los pasajeros 
    al viaje, solicitando por consola la información de los mismos. Se debe verificar 
    que el pasajero no este cargado mas de una vez en el viaje. De la misma forma 
    cargue la información del responsable del viaje.
*/
class Viaje{

    // Atributos
    private $codigo;
    private $destino;
    private $cantMaximaPasajeros;
    private $colObjPasajeros;
    private $objResponsableViaje;
    private $costoInvidualDelViaje; // nuevo tpe-2 int
    private $costoTotalPasajeros; // nuevo tpe-2 int

    /** Metodo Constructor.
     * Recibe como parametros los valores de los atributos 
     * de una clase Viaje. Retorna vacio
     * @param INT $codigoViaje
     * @param STRING $destinoViaje
     * @param INT $cantMaxPasajeros
     * @param ARRAY $colPasajeros
     * @param OBJECT $objResponsableViaje
     * @param INT $costoInvidualDelViaje
     * @param INT $costoTotalPasajeros
     */
    public function __construct($codigoViaje, $destinoViaje, $cantMaxPasajeros, $colPasajeros, $objResponsableViaje, $costoInvidualDelViaje, $costoTotalPasajeros){

        // Inicialiazion de los Valores
        $this->codigo = $codigoViaje;
        $this->destino = $destinoViaje;
        $this->cantMaximaPasajeros = $cantMaxPasajeros;
        $this->colObjPasajeros = $colPasajeros;
        $this->objResponsableViaje = $objResponsableViaje;
        $this->costoInvidualDelViaje = $costoInvidualDelViaje;
        $this->costoTotalPasajeros = $costoTotalPasajeros;
    }

    // Metodo de Acceso Get----------------------------------------------------------
    /** Metodo de Acceso Get.
     * Retorna el codigo asignado.
     * @return INT */
    public function getCodigoViaje(){
        return $this->codigo;
    }

    /** Metodo de Acceso Get.
     * Retorna el destino asignado.
     * @return STRING */
    public function getDestino(){
        return $this->destino;
    }

    /** Metodo de Acceso Get.
     * Retorna el numero maximo de pasajero asignado.
     * @return INT */
    public function getCantMaximaPasajeros(){
        return $this->cantMaximaPasajeros;
    }

    /** Metodo de Acceso Get.
     * Retorna un array de objetos pasajeros.
     * @return ARRAY */
    public function getColObjPasajeros(){
        return $this->colObjPasajeros;
    }

    /** Metodo de Acceso Get.
    * Retorna un objeto de una persona responsable.*/
    public function getObjResponsableViaje(){
        return $this->objResponsableViaje;
    }

    /** Metodo de Acceso Get.
    * Retorna la suma de los costos abonados por los pasajeros.
    * @return INT */
    public function getCostoInvidualDelViaje(){
        return $this->costoInvidualDelViaje;
    }

    /** Metodo de Acceso Get.
    * Retorna la suma de los costos abonados por los pasajeros.
    * @return INT */
    public function getCostoTotalPasajeros(){
        return $this->costoTotalPasajeros;
    }

    // Metodo de Acceso Set---------------------------------------------------------
    /** Metodo de Acceso Set.
     * Recibe un parametro de un codigo de viaje.
     * Retorna un nuevo codigo de viaje.
     * @param INT $nuevoCodigo */
    public function setCodigoViaje($nuevoCodigo){
        $this->codigo = $nuevoCodigo;
    }

    /** Metodo de Acceso Set.
     * Recibe un parametro de un destino.
     * Retorna un nuevo destino.
     * @param STRING $nuevoDestino */
    public function setDestino($nuevoDestino){
        $this->destino = $nuevoDestino;
    }

    /** Metodo de Acceso Set.
     * Recibe un parametro cant max de pasajeros.
     * Retorna un nuevo numero de cant max de pasajeros.
     * @param INT $nuevaCantidad */
    public function setCantMaximaPasajeros($nuevaCantidad){
        $this->cantMaximaPasajeros = $nuevaCantidad;
    }

    /** Metodo de Acceso Set.
     * Recibe un parametro tipo ARRAY de un nuevo arreglo de objetos.
     * Retorna un nuevo arreglo de objetos
     * @param ARRAY $nuevosPasajeros */
    public function setColObjPasajeros($nuevosPasajeros){
        $this->colObjPasajeros = $nuevosPasajeros;
    }

    /** Metodo de Acceso Set.
     * Recibe un parametro tipo OBJECT de una 
     * nueva persona responsable y 
     * retorna un nuevo objeto de persona responsable
     * @param OBJECT $nuevaPersonaR */
    public function setObjResponsableViaje($nuevaPersonaR){
        $this->objResponsableViaje = $nuevaPersonaR;
    }

    /** Metodo de Acceso Set.
    * Retorna la suma de los costos abonados por los pasajeros.
    * @param INT $nuevoCosto */
    public function setCostoInvidualDelViaje($nuevoCostoIndivual){
        $this->costoInvidualDelViaje = $nuevoCostoIndivual;
    }

    /** Metodo de Acceso Set.
    * Retorna la suma de los costos abonados por los pasajeros.
    * @param INT $nuevoCosto */
    public function setCostoTotalPasajeros($nuevoCosto){
        $this->costoTotalPasajeros = $nuevoCosto;
    }

    private function mostrarArray($array){

        $lista = "";
        $i = 1;

        foreach($array as $objecto){
            $lista .= "[" . $i++ . "]" . $objecto . "\n";
        }

        return $lista;
    }

    /** Metodo toString.
     * Retorna una cadena de carateres de todos los atributos
     * @return STRING */
    public function __toString(){
        // STRING $info
        // INT $i

        // Inicializacion
        $colPasajeros = $this->getColObjPasajeros();

        $info = "-----------------------------------------------------------------\n";
        $info .= "\nInformacion del Viaje:\n\n";
        $info .= "*Codigo del Viaje: " . $this->getCodigoViaje() . ".\n";
        $info .= "*Destino del Viaje: " . $this->getDestino() . ".\n";
        $info .= "*Cantidad Max de Pasajeros: " . $this->getCantMaximaPasajeros() . ".\n";
        $info .= "*Informacion de Pasajeros:\n\n" . $this->mostrarArray($colPasajeros);
        $info .= "*Informacion de la Persona Responsable de Realizar el Viaje:\n";
        $info .= $this->getObjResponsableViaje();
        $info .= "*Costo del Viaje: " . $this->getCostoInvidualDelViaje() . "\n";
        $info .= "*Suma de los Costos Abonados del Viaje: " . $this->getCostoTotalPasajeros() . "\n";

        return $info;

    }

    /** Metodo Corregir Informacion de Pasajero
     * Recibe como parametro datos para modificar la informacion 
     * de un pasajero, excepto el numero de DNI.
     * Se verifica si el numero de DNI de la persona a modificar esta en la lista.
     * Si el DNI aparece, se modifican. No se modifican caso contrario.
     * Retorna un booleano
     * @param STRING $nombre
     * @param STRING $apellido
     * @param INT $telefono
     * @param INT $nroDniBusqueda
     * @return BOOLEAN */
    public function corregirInformacion($nombre, $apellido, $telefono, $nroDniBusqueda){
        // ARRAY $personas
        // BOOLEAN $encontrado
        // INT $o

        // inicializacion
        $personas = $this->getColObjPasajeros(); // arreglo de personas
        $encontrado = false;
        $o = 0;

        // busqueda para modifcar los datos de la persona asignada
        while ($o < count($personas) && !$encontrado) {

            if ($personas[$o]->getNroDni() == $nroDniBusqueda) {

                // Se encontro la persona a modificar sus datos
                $encontrado = true;

                // Actualizacion de Informacion de Pasajero Asignado
                $personas[$o]->setNombre($nombre);
                $personas[$o]->setApellido($apellido);
                $personas[$o]->setTelefono($telefono);
            }
            
            $o++;

        }

        return $encontrado;

    }

    /** Metodo Agregar Pasajero
     * Recibe como parametro un objeto de un nuevo pasajero.
     * Se verifican si los datos no se repita con otra persona (nroDni)
     * y retorna un nuevo objeto Pasajero
     * @param OBJECT $nuevoPasajero
     * @return OBJECT */
    public function agregarPasajero($nuevoPasajero){
        // ARRAY $personas
        // INT $i, $countPasajeros
        // BOOLEAN $encontrado

        // Incializacion
        $personas = $this->getColObjPasajeros();
        $countPasajeros = count($personas); // valores del array
        $encontrado = false;
        $i = 0;

        // Recorrido para verifiacar si los datos asignado son verdadero o no
        while ($i < $countPasajeros && !$encontrado) {

            // Si nroDni son iguales, no se guarda el nuevo pasajero (true). Se guarda caso contrario (false).
            if ($personas[$i]->getNroDni() == $nuevoPasajero->getNroDni()) {

                $encontrado = true; // verifica que existe el pasajero en la lista

            }

            $i++; // incrementa el contador

        }

        if($encontrado != true){
            // Formula Agregar Nuevo Pasajero a la Coleccion de Pasajeros de Viaje
            $personas[$countPasajeros] = $nuevoPasajero;

            // Metodo de Acceso Set - Actualiza la lista agregando un nuevo pasajero en el viaje
            $this->setColObjPasajeros($personas);
        }

        return $encontrado;

    }

    /** Metodo Corregir Informacion de la Persona Responsable
     * Recibe como parametro los datos a modificar de un Empleado.
     * Se modifican los datos de un empleado y retorna un numero de un digito
     * @param INT $numeroEmp
     * @param INT $numeroLic
     * @param STRING $nombreEmp
     * @param STRING $apellidoEmp
     * @return INT */
    public function corregirInformacionResponsable($numeroEmp, $numeroLic, $nombreEmp, $apellidoEmp){
        // INT $y
        // OBJECT $personaResponsable

        // inicializacion
        $personaResponsable = $this->getObjResponsableViaje(); // objeto de persona responsable
        $y = 1;

        // verificacion si el numero del empleado son iguales al empleado que se quiere corregir. Si son iguales se modifican los datos
        if($personaResponsable->getNroEmpleado() != $numeroEmp){

            $y = 0;

            // Actualizacion de Informacion de Persona Responsable Asignado
            $personaResponsable->setNroEmpleado($numeroEmp);
            $personaResponsable->setNroLicencia($numeroLic);
            $personaResponsable->setNombreEmpleado($nombreEmp);
            $personaResponsable->setApellidoEmpleado($apellidoEmp);
        }

        return $y;

    }

    /*
        Implemente la función hayPasajesDisponible() que retorna verdadero si la cantidad de pasajeros del viaje es menor a la cantidad máxima de pasajeros y falso caso contrario
    */
    public function hayPasajesDisponible(){

        // incializacion
        $cantidadMaximaPasajeros = $this->getCantMaximaPasajeros();
        $colPasajeros = $this->getColObjPasajeros();
        $hayEspacio = false;

        if(count($colPasajeros) < $cantidadMaximaPasajeros){
            $hayEspacio = true;
        }

        return $hayEspacio;

    }

    /** TPE-2 - venderPasaje($objPasajero)
     * Metodo que debe incorporar el pasajero a la colección de pasajeros 
     * (solo si hay espacio disponible), actualizar los costos abonados y 
     * retornar el costo final que deberá ser abonado por el pasajero.
     * @param OBJECT $objPasajero
     * @return INT
     */
    public function venderPasaje($objPasajero){

        // incializacion
        $porcentajePasajero = $objPasajero->darPorcentajeIncremento();
        $costoIndividual = $this->getCostoInvidualDelViaje();
        $costoTotal = $this->getCostoTotalPasajeros();
        $colPasajeros = $this->getColObjPasajeros();
        $hayPasaje = $this->hayPasajesDisponible();
        $nuevoCostoPasajero = 0;

        
        if($hayPasaje != false){

            // se incorpora el pasajero a la coleccion de pasajeros
            array_push($colPasajeros, $objPasajero);

            // se actualiza la coleccion de pasajeros del viaje
            $this->setColObjPasajeros($colPasajeros);

            //calculo de incremento de viaje del pasajero
            $nuevoCostoPasajero = $costoIndividual + (($costoIndividual * $porcentajePasajero)/100);

            // se guarda todo el costo abonados por pasajeros en una variable
            $nuevoCostoTotal = $costoTotal + $nuevoCostoPasajero;
            
            // se setea los costos abonados por los pasajero en el viaje
            $this->setCostoTotalPasajeros($nuevoCostoTotal);

        }

        // retorna el costo final que deberá ser abonado por el pasajero
        return $nuevoCostoPasajero;

    }
}
?>