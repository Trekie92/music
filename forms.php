<?php

function loginform() {
    echo '<h1 class="pagetitle">Anmeldung</h1>';
    echo '<div class="innerbox">';
    echo '<form action="check.php" method="POST" id="login"><table>';
    echo '<tr><td><label for="username">Benutzername</label></td><td><input type="text" name="username" id="username" maxlength="55" /></td></tr>';
    echo '<tr><td><label for="password">Passwort</label></td><td><input type="password" name="password" id="password" maxlength="55" /></td></tr>';
    echo '<tr><td colspan="2" id="loginbutton"><button type="submit">Anmelden</button></td></tr>';
    echo '</table></form>';
    echo '</div>';
}