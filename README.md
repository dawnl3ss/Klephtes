# Kleptes
🗒 Kleptes is a free and opensource script to grab and stock your website-viewers' data in a database.  
🖋 Fully written in PHP & SQL.  

### 📌 Usage :
```php
<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/Kleptes/src/grab/KleptesGrab.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/Kleptes/src/provider/MySQL.php";

(new KleptesGrab($_SERVER, new MySQL()))->insert_data();
```  
- First, fullfill the <a href="https://github.com/Neptune-IT/Kleptes/blob/main/src/settings/sql-ids.json">settings</a> file with your sql and database ids.  
- Then, require the <a href="https://github.com/Neptune-IT/Kleptes/blob/main/src/grab/KleptesGrab.php">KleptesGrab.php</a> file & the right <a href="https://github.com/Neptune-IT/Kleptes/blob/main/src/provider">provider</a> file.  
- Finally, just create an instance of the KleptesGrab class and use the 'insert_data()' function.
