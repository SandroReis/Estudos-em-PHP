<?php
//cookie
setcookie('user','Sandro Reis',time()+3600);
setcookie('email', 'sandrouh@hotmail.com',time()+3600);
setcookie('ultima_pesquisa','tenis adidas', time()+3600);

var_dump($_COOKIE);