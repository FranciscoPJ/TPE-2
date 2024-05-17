<?php
include_once "Viaje.php";
include_once "Pasajero.php";
include_once "Pasajero_Necesidades_Especiales.php";
include_once "Pasajero_Vip.php";
include_once "Pasajero_Standard.php";
include_once "ResponsableV.php";

// pasajero: $nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje

// discapacitado: $nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje, $colServicioEspecial

// vip: $nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje, $nroViajeroFrecuente, $cantMillasPasajero

// standard: $nombre, $apellido, $nroDni, $telefono, $nroAsiento, $nroTicketPasaje

// viaje: $codigoViaje, $destinoViaje, $cantMaxPasajeros, $colPasajeros, $objResponsableViaje, $costoInvidualDelViaje, $costoTotalPasajeros

//------------------------------------------------------------------------

function preguntarDisponibilidad($value)
{
    if ($value == true) {
        echo "\nHay Disponibilidad de Pasajes.\n";
    } else {
        echo "\nNo Hay Disponibilidad de Pasajes.\n";
    }
}

function venderUnPasaje($colPasajero)
{
    echo "\n------------------------------------------------\n Escoja un numero de ";

    echo "tipo de Pasaje: (Standard) = 1, (VIP) = 2 o (Especial) = 3? \n";
    $nroRespuesta = trim(fgets(STDIN));

    echo "Ingrese Nombre: ";
    $nombre = trim(fgets(STDIN));     // Se introduce un nuevo nombre

    echo "Ingrese Apellido: ";
    $apellido = trim(fgets(STDIN));     // Se introduce un nuevo apellido

    echo "Ingrese Numero de DNI: ";
    $nroDni = trim(fgets(STDIN));     // Se introduce un nuevo DNI

    echo "Ingrese Numero de Telefono: ";
    $nroTelefono = trim(fgets(STDIN));     // Se introduce un nuevo telefono

    switch ($nroRespuesta) {
        case 1: // pasajero Standard
            $nuevoPasajero = new Pasajero_Standard($nombre, $apellido, $nroDni, $nroTelefono, count($colPasajero) + 1, count($colPasajero) + 1);
            break;
        case 2: // pasajero VIP

            echo "Ingrese numero de viajero frecuentes: \n";
            $cantViajesFrecuentes = trim(fgets(STDIN));

            echo "Ingrese cantidad de millas: \n";
            $cantMillas = trim(fgets(STDIN));

            $nuevoPasajero = new Pasajero_Vip($nombre, $apellido, $nroDni, $nroTelefono, count($colPasajero) + 1, count($colPasajero) + 1, $cantViajesFrecuentes, $cantMillas);
            break;
        case 3: // pasajero con necesidades especial

            $servicios = [];

            echo "Ingrese cantidad de servicio o servicios: \n";
            $cant = trim(fgets(STDIN));

            for ($i = 0; $i < $cant; $i++) {
                echo ($i + 1) . ": ";
                $servicios[$i] = trim(fgets(STDIN));
            }

            $nuevoPasajero = new Pasajero_Necesidades_Especiales($nombre, $apellido, $nroDni, $nroTelefono, count($colPasajero) + 1, count($colPasajero) + 1, $servicios);
            break;
    }

    return $nuevoPasajero;
}

// Objetos Pasajeros
$personaUno = new Pasajero_Necesidades_Especiales("Francisco", "Pandolfi", 123, 2995920060, 1, 1, ["asistencia"]);
$personaDos = new Pasajero_Necesidades_Especiales("Esteban", "Pilchu", 234, 2995449923, 2, 2, ["asistencia", "Alergico al Mani"]);
$personaTres = new Pasajero_Vip("Rodrigo", "Blanca", 876, 2994569832, 3, 3, 10, 299);

// Arreglo de Listado de Pasajeros
$arregloPasajero = [];
$arregloPasajero[0] = $personaUno;
$arregloPasajero[1] = $personaDos;
$arregloPasajero[2] = $personaTres;

// Objeto Persona Responsable de Realizar el Viaje
$personaResponsable = new ResponsableV(20, 123456789, "Pedro", "Torres");

// Objeto Viaje
$capacidadMaxima = 5;
$viaje = new Viaje(2024090420, "Futaleufu, Chile", $capacidadMaxima, $arregloPasajero, $personaResponsable, 200, 760);


// Inicio del Menu ------------------------------
do {
    // opciones del menu
    echo "\nBienvenido al Sistema de Viaje Feliz!\n";
    echo "1. Mostrar información inicial del viaje\n";
    echo "2. Modificar datos del pasajero\n";
    echo "3. Agregar pasajero\n";
    echo "4. Modificar datos de la Persona Responsable\n";
    echo "5. Mostrar datos del viaje\n";
    echo "6. Disponibilidad de Pasaje\n";
    echo "7. Vender Pasaje\n";
    echo "8. Salir\n";
    $num = trim(fgets(STDIN)); // se elige un numero del menu

    switch ($num) {
        case 1: // Se muestra los valores iniciales

            echo $viaje . "---------------------------------------------------\n";

            break;
        case 2: // Modificar Informacion de un Pasajero

            echo "\nIngrese el numero de DNI de la persona a modificar: "; //Buscar DNI de perrsona a modificar
            $modDni = trim(fgets(STDIN));

            echo "\nIngrese un Nombre para modificar: "; // nombre nuevo para modificar
            $modNombre = trim(fgets(STDIN));

            echo "\nIngrese un Apellido para modificar: "; // apellido nuevo para modificar
            $modApellido = trim(fgets(STDIN));

            echo "\nIngrese un numero de telefono para modificar: "; // telefono nuevo para modificar
            $modTelefono = trim(fgets(STDIN));

            // se le asigna un viable para determinar su resultado booleano(true/false)
            $respuestaUno = $viaje->corregirInformacion($modNombre, $modApellido, $modTelefono, $modDni);

            // Se envia un mensaje de aviso segun el valor obtenido al usuario
            if ($respuestaUno == true) { // true se pudo modificar los datos de la persona asignada
                echo "\n--------------- Se Modifico La Informacion de un Pasajero! ---------------\n\n";
            } else {    // false, no existe el pasajero para modificar los datos
                echo "\n--------------- Este Pasajero No Existe, Disculpe La Molestia ---------------\n\n";
            }
            break;
        case 3: // Agregar un Nuevo Pasajero

            $variableInt = count($viaje->getColObjPasajeros());
            if ($variableInt < $capacidadMaxima) {

                // creacion de un nuevo objeto pasajero (nueva instancia)
                $nuevoPasajero = venderUnPasaje($viaje->getColObjPasajeros());

                // Valor booleano (false = se puede agregar. True no se puede agregar)
                $res = $viaje->agregarPasajero($nuevoPasajero);

                if ($res == false) {
                    echo "\n--------------- Se agrego en la lista el nuevo pasajero! ---------------\n\n";
                } else {
                    echo "\n--------------- Esta informacion es invalida! ---------------\n";
                }
            } else { // si la cantidad maxima de pasajeros es la misma que el listado de Numero de pasajeros, no se agrega mas pasajeros
                echo "\n--------------- No se puede agregar mas pasajeros, el viaje esta lleno. ---------------\n";
            }

            break;
        case 4: // Corregir Datos de la Persona Responsable

            echo "Ingrese Nombre: ";    // Se introduce un nuevo nombre
            $nombreRes = trim(fgets(STDIN));

            echo "Ingrese Apellido: ";  // Se introduce un nuevo apellido
            $apellidoRes = trim(fgets(STDIN));

            echo "Ingrese Numero de Licencia: ";    // Se introduce un numero nuevo de licencia
            $nroLicRes = trim(fgets(STDIN));

            echo "Ingrese Numero de Empleado: ";    // Se introduce un nuevo numero de empleado
            $nroEmpRes = trim(fgets(STDIN));

            // Valor INt (0 = se puedo corregir. 1 no se puedo corregir)
            $op = $viaje->corregirInformacionResponsable($nroEmpRes, $nroLicRes, $nombreRes, $apellidoRes);

            if ($op == 0) { // verificacion de valores
                echo "\n--------------- Se corrigio los datos de la Persona Responsable! ---------------\n\n";
            } else {
                echo "\n--------------- No se corrigio los datos de la Persona Responsable Porque Ya Existe! ---------------\n";
            }

            break;
        case 5: //Mostrar datos del viaje
            echo $viaje;

            break;
        case 6: //Preguntar Si Hay Disponibilidad de Pasajes
            $pregunta = $viaje->hayPasajesDisponible();
            preguntarDisponibilidad($pregunta);
            break;
        case 7: //Vender un Pasaje
            $colPasajeros = $viaje->getColObjPasajeros();
            if (count($colPasajeros) < $capacidadMaxima) {
                $pasajero = venderUnPasaje($colPasajeros);
                echo "\n----------------------------------\n";
                echo "El valor del pasaje es: $" . $viaje->venderPasaje($pasajero) . "\n";
                echo "----------------------------------\n";
            } else {
                echo "\nNo Hay mas pasajes\n";
            }
            break;
        case 8: // Salir del Menu
            echo "\n--------------- Fin Menu ---------------\n\n";

            break;
        default; // si $num es 6 se termina la consola de ejecutarse
            echo "\n--------------- Error Numero Seleccionado ---------------\n\n";

            break;
    }
} while ($num != 8); // condicion que termina la secuencia repetitiva 
