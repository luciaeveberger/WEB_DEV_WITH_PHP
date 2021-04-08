<?php

echo 'Standard DES:' . crypt('rasmuslerdorf', 'rl') . "<br>";
echo 'Extended DES:' . crypt('rasmuslerdorf', '_J9..rasm') . "<br>";
echo 'MD5:' . crypt('rasmuslerdorf', '$1$rasmusle$') . "<br>";
echo 'Blowfish:' . crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$') . "<br>";
