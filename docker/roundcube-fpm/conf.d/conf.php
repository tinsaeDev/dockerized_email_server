<?php

$config['product_name'] = "Five Star Company Email";
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


$rcmail_config['password_dovecotpw'] = '/usr/bin/doveadm pw'; // for dovecot-1.x
$rcmail_config['password_dovecotpw_method'] = 'ARGON2I';
$rcmail_config['password_algorithm_prefix'] = '{ARGON2I}';
$rcmail_config['password_crypt_hash'] = 'dovecot';
$rcmail_config['password_dovecotpw_with_method'] = true;
$rcmail_config['password_algorithm'] = 'hash-argon2i';



$rcmail_config['username_domain'] = 'fivestar.et';


$rcmail_config['password_driver'] = 'sql';
$rcmail_config['password_confirm_current'] = true;


$rcmail_config['password_db_dsn'] = "pgsql://$vmail_db_user:$vmail_db_password@$vmail_db_host/$vmail_db_name";
$rcmail_config['password_query'] = "UPDATE mailbox SET password=%P WHERE username=%u";


// Auto create users
$rcmail_config['auto_create_user'] = TRUE;

?>