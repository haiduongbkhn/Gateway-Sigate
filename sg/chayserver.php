<?php

//pclose(popen("start /B truccanh\server.bat","r"));die("server dang chay");
//pclose(popen("start /B truccanh\server.bat","r")); die("server dang chay");

//echo("da chay xong");

shell_exec("truccanh\server.bat");
die("Mat luong gui ve");
echo("Success");



?>