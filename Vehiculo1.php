<?php
class Vehiculo
{
    public  $id_vehiculo;
    public  $vehiculos_creados;
    public  $totalkm;
    public  $recorridoskm;
    public  $numero_ruedas;
    public  $numero_pasajeros;

    /**
     * Default constructor
     */
    public function __construct($id_vehiculo,$vehiculos_creados=0,$totalkm=0,$recorridoskm,$numero_ruedas=0,$numero_pasajeros)
    {
        /** Un constructor es un método especial de una clase que se ejecuta 
        *automáticamente al crear un objeto de dicha clase. El constructor se utiliza 
        *para inicializar el objeto con los valores iniciales de sus propiedades y 
        *realizar cualquier otra tarea necesaria antes de que el objeto sea utilizado por el programa.
        */
        $this->id_vehiculo=$id_vehiculo;
        $this->vehiculos_creados=$vehiculos_creados;
        $this->totalkm=$totalkm;
        $this->recorridoskm=$$recorridoskm;
        $this->numero_ruedas=$ $numero_ruedas;
        $this->numero_pasajeros=$numero_pasajeros;
         
/**
* Creamos un objeto de la clase vehiculo
*/

$vehiculo1 = new autobus(1020,"Benz",1,300,4,60);
$vehiculo2 = new autobus_Escolar();

$bicicleta1 = new bicicletaElec();
$bicicleta2 = new bicicletaMontaña();
$bicicleta1 = new bicicletaCarretera();


    }
    
    

    /**
     * Función de métodos
     */
    public function arrancar()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function acerar()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function desacelerar()
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function TotalRecorrido()
    {
        // TODO implement here
    }

}