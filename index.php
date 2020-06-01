<?php

function formatName($name)
{
    if (empty($name))
        return false;

    $out = '';
    $arr = explode(' ', mb_strtolower($name));

    foreach ($arr as $value) {
        if (in_array(trim($value), array("de", "da", "e", "dos", "do"))) {
            $out .= $value . ' ';
        } else {
            $out .= mb_convert_case($value, MB_CASE_TITLE, 'UTF-8') . ' ';
        }
    }

    return trim($out);
}

formatName('JOSÉ NORBERTO E SILVA');        // José Norberto e Silva
formatName('ÂNTONIO sOBRInHO Dos Santos');  // Ântonio Sobrinho dos Santos
formatName('Jéssica Cunha BraGA Da Costa'); // Jéssica Cunha Braga da Costa
