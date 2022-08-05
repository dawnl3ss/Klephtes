# Klephtes
🗒 Klephtes is a free and opensource script to grab and stock your website-viewers' data in a database.  
🖋 Fully written in PHP & SQL.  

### 📌 Usage :
```php
<?php

require_once "app.php";
__insert($_SERVER);

```  
- First, fullfill the <a href="https://github.com/Neptune-IT/Kleptes/blob/main/settings/sql-ids.json">settings</a> file with your sql and database ids.  
- Then, require the <a href="https://github.com/Neptune-IT/Kleptes/blob/main/app.php">app.php</a> file.  
- Finally, just use the '__insert()' function with $_SERVER global function parameter.
