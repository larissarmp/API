<?php
/**
 * Description of cliente
 *
 * @author Larissa
 */

    $url = 'http://localhost/API/api/v1';

    $classe = 'adicionarCliente';
    $metodo = 'mostrar';

    $montar =$url.'/'.$classe.'/'.$metodo;

    $retorno = file_get_contents($montar);

    json_encode($retorno, 1);

