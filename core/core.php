<?php 

date_default_timezone_set('Europe/Madrid');

#Connections constant
define('DB_HOST','localhost');
define('DB_USER','hulfn');
define('DB_PASS','nilcyd');
define('DB_NAME','padrinoDB');

#APP Constant
define('HTML_DIR', 'html/');
define('APP_TITTLE', 'Codinach Yzquierdo');
define('APP_COPY', 'Copyright &copy; ' . date('Y',time()) . ' N.I.L.C.Y.D');
define('APP_URL', 'http://www.pintor.com/codinachyzquierdo/index.php');

#APP Structure
require ('core/models/class.Conn.php');

?>