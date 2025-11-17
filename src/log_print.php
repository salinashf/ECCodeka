<?php
function logq($msg)
{
    $borde = "................\n";
    file_put_contents('php://stdout', $borde);
    file_put_contents('php://stdout', $msg . "\n");
    file_put_contents('php://stdout', $borde);
}
