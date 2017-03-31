<?php

function setActive($path, $active = 'active') {
   // Allows me to check for an array of paths
   return call_user_func_array('Request::is', (array)$path) ? $active : '';
}