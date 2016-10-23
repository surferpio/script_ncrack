<?php
set_time_limit(300);
$stream = popen('ncrack -v -p ftp,telnet,http,https -U user.txt -P pass.txt localhost', 'r');
echo "<pre>";
while (!feof($stream)) {
    $buffer = fread($stream, 1024);
    echo $buffer, PHP_EOL;
}
echo "</pre>";
pclose($stream);

?>