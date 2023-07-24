<?php

$fp = fopen("var.php", "w");
echo get_resource_type($fp) . "\n";