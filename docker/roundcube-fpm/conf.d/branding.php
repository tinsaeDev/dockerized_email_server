<?php

$config['product_name'] = "FiveStar Email";
$config['plugins'] = array(
  'password',
  'markasjunk',
  'contextmenu',
  'newmail_notifier',
  'zipdownload',
);



// Virtial Mailbox password related

$vmail_db_host = getenv("ROUNDCUBEMAIL_DB_HOST");
// $vmail_db_port = getenv("");
$vmail_db_name = getenv("VMAIL_DB");
$vmail_db_user = getenv("ROUNDCUBEMAIL_DB_USER");
$vmail_db_password = getenv("ROUNDCUBEMAIL_DB_PASSWORD");


// $config['password_db_dsn'] = 'mysql://MY-USER:MY PASSWORD@conderus.mysql.dhosting.pl/MY-DATABASE-NAME’;
// $config['password_crypt_hash'] = 'md5';
// $config['password_idn_ascii'] = false;
// $config['password_hash_algorithm'] = 'sha1';
// $config['password_hash_base64'] = false;




$rcmail_config['password_driver'] = 'sql';
$rcmail_config['password_confirm_current'] = true;

$rcmail_config['password_db_dsn'] = "pgsql://$vmail_db_user:$vmail_db_password@$vmail_db_host/$vmail_db_name";

// $rcmail_config['password_query'] = "UPDATE mailbox SET password=CONCAT(_utf8'{SHA512-CRYPT}',ENCRYPT(_utf8%p,CONCAT(_utf8'$6$', SUBSTRING(SHA(RAND()), -16)))) WHERE user=%u LIMIT 1";
$rcmail_config['password_query'] = "UPDATE mailbox SET password=%P,passwordlastchange=NOW() WHERE username=%u";
$rcmail_config['password_crypt_hash'] = 'sha1';
// $config['password_idn_ascii'] = false;
// $config['password_hash_algorithm'] = 'sha1';
// $config['password_hash_base64'] = false;

?>