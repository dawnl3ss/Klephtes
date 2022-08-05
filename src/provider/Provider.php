<?php

require_once __DIR__ . "/../standard/ProviderTypes.php";

abstract class Provider implements ProviderTypes {

    /** @var string $type */
    public $type;

    public function __construct(string $prov_type){
        $this->type = $prov_type;
    }

    abstract public function connect_sql();
}
