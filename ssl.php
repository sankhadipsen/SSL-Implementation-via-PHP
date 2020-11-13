<?php
    function sessionStart($lifeTime, $path, $domain, $secure, $httpOnly)
    {
        session_set_cookie_params($lifeTime, $path, $domain, $secure, $httpOnly);
        session_start();
    }
    sessionStart((time()+600), '/','localhost',true, true);  
?>
