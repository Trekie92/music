<?php
function headder($title = "Musikdatenbank", $refreshto = "") {
    echo '<!DOCTYPE html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />';
    if ($refreshto != "") {
        echo '<meta http-equiv="refresh" content="0;url="' . $refreshto . '">';
    }
    echo '<meta charset="utf-8" />';
    echo '<link rel="stylesheet" type="text/css" href="style/main.css" media="screen" />';
    echo '</head>';
    echo '<body>';
    echo '<div class="navdummy"></div>';
    echo '<div id="outerbox">';
}

function footer() {
    echo '</div>';
    echo '</body>';
    echo '</html>';
}

function menu($dbrights = 'a', $userrights = 'a') {
    $menu = "";
    switch($dbrights) {
        case 'b': $menu = '<div class="button">Eingabe</div>'; break;
        case 'c': $menu = '<div class="button">Eingabe</div><div>Ändern</div>'; break;
        case 'c': $menu = '<div class="button">Eingabe</div><div>Ändern</div><div>Löschen</div>'; break;
        default: $menu = '';
    }
    if ($dbrights != 'a') {
        $menu .= '<div class="button">Usermanagement</div>';
    }
    echo '<nav><div class="button">Ausgabe</div>' . $menu . '<div class="button2">Logout</div></nav>';
}