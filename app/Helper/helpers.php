<?php
if (!function_exists('checkStrExistInOther')) {
    function checkStrExistInOther( string $sSearch, string $sStr )
    {
        $iPos = strpos($sSearch, $sStr);

        return substr($sSearch, 0, $iPos);
    }
}
