<?php

return array(
 
    'driver' 		=> 'smtp',
    'host' 			=> 'smtp.gmail.com',
    'port' 			=> 587,
    'from' 			=> array('address' => 'muliakaryaprima@msn.com', 'name' => 'PT Mulia Karya Prima'),
    'encryption' 	=> 'tls',
    'username' 		=> 'akun.tester232@gmail.com',
    'password' 		=> 'akuntester232',
    'sendmail' 		=> '/usr/sbin/sendmail -bs',
    'pretend' 		=> false,
 
);
