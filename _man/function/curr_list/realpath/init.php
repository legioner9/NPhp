<?php
chdir('/var/www/');
echo realpath('./../../etc/passwd') . PHP_EOL;
echo realpath('./../../') . PHP_EOL;
echo realpath('../..') . PHP_EOL;

echo realpath('/tmp/') . PHP_EOL;

// /etc/passwd
// /
// /
// /tmp