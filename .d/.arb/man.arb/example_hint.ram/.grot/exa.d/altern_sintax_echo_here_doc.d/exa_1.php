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