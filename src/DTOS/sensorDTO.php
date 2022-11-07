<?php

namespace App\DTOS; //Conectar 

class SensorDTO{
    public $_temperatura; //Decalrar temperatura
    public $_umidade; //Declarar Umidade

    function __construct($temperatura, $umidade){
        $this->_temperatura = $temperatura; // Temperatura recebe temperatura
        $this->_umidade = $umidade; //Umidade recebe umidade
    }
}