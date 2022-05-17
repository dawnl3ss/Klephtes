<?php

require_once "src/grab/KleptesGrab.php";
require_once "src/provider/MySQL.php";

(new KleptesGrab($_SERVER, new MySQL()))->insert_data();
