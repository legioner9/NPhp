<?php

$a = 5;
if ($a == 5): ?>
    A равно 5
<?php endif; ?>

<ul>
    <?php
    $list = array("one", "two");
    foreach ($list as $item):
        echo
            <<<ITEM
    <li >Item $item</li>
ITEM;
    endforeach; ?>
</ul>