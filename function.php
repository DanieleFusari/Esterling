<?php

function find($category)
{
    global $dd;
    foreach ($dd as $key => $value) {
        if ($value['id'] == $category) {
            return $dd[$key];
        }
    }
}


function getCategory($category, $separator)
{
    $item = find($category);
    $breadcrumb[] = $item['name'];
    while ($item['parent_id'] > 0) {
        $item = find($item['parent_id']);
        $breadcrumb[] = $item['name'];
    }

    $list = implode($separator, array_reverse($breadcrumb));
    return $list;
}
