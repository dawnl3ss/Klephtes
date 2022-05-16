<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/Kleptes/src/grab/KleptesGrab.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Kleptes/src/provider/MySQL.php";

(new KleptesGrab($_SERVER, new MySQL()))->insert_data();
