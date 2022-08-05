<?php

require_once "./src/grab/Grab.php";
require_once "./src/provider/MySQL.php";

function __insert($server){
    (new Grab($server, new MySQL()))->insert_data();
}