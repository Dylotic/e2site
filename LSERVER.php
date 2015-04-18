<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_LSERVER = "";
$database_LSERVER = "";
$username_LSERVER = "";
$password_LSERVER = "";
$LSERVER = mysql_pconnect($hostname_LSERVER, $username_LSERVER, $password_LSERVER) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
