<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/Kleptes/standard/ProviderTypes.php";

class Provider implements ProviderTypes {

    /** @var int $type */
    public $type;

    public function __construct(int $prov_type){
        $this->type = $prov_type;
    }
}