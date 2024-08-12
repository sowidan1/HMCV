<?php

function buildPrefix(string $module_name , string $type = 'backend'){

    return config( $module_name . '.prefix.' .$type , config('module.prefix.' .$type )).'/'.config( $module_name . '.module-name');
}
