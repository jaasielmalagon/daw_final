<?php

namespace App\Models;

class Model {

    function __construct($container) {
        $this->container = $container;
    }

    function __get($property) {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }

    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

