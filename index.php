<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/Kleptes/grab/KleptesGrab.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Kleptes/provider/MySQL.php";

(new KleptesGrab($_SERVER, new MySQL()))->insert_data();
