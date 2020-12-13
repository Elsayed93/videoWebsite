<?php

function is_active(string $routeName)
{
    if (request()->segment(2) !== null && request()->segment(2) == $routeName) {
        return 'active';

    } else if (request()->segment(1) !== null && request()->segment(1) == $routeName && request()->segment(2) == null) {
        return 'active';

    } else {
        return '';
    }
}
