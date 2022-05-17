# Klephtes
🗒 Klephtes is a free and opensource script to grab and stock your website-viewers' data in a database.  
🖋 Fully written in PHP & SQL.  

### 📌 Usage :
```php
<?php

require_once "src/grab/KlephtesGrab.php";
require_once "src/provider/MySQL.php";

(new KlephtesGrab($_SERVER, new MySQL()))->insert_data();
```  
- First, fullfill the <a href="https://github.com/Neptune-IT/Kleptes/blob/main/settings/sql-ids.json">settings</a> file with your sql and database ids.  
- Then, require the <a href="https://github.com/Neptune-IT/Kleptes/blob/main/src/grab/KlephtesGrab.php">KlephtesGrab.php</a> file & the right <a href="https://github.com/Neptune-IT/Kleptes/blob/main/src/provider">provider</a> file.  
- Finally, just create an instance of the KlephtesGrab class and use the 'insert_data()' function.
