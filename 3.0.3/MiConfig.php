<?php

namespace App\Config;

use App\Models\ConfiguracionModel;
use CodeIgniter\Config\BaseConfig;

class MiConfig extends BaseConfig
{
    public static function MiConfig()
    {
        $configuracion = new ConfiguracionModel();
        $datos = $configuracion->findAll();
        $config = array();

        foreach ($datos as $fila) {
            $config[$fila['nombre']] = $fila['valor'];
        }

        return $config;
    }
}
