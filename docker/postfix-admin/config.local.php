<?php
$CONF['configured'] = true;
$CONF['database_type'] = 'pgsql';
$CONF['database_host'] = 'db';
$CONF['database_port'] = '5432';
$CONF['database_user'] = 'mail1234567890';
$CONF['database_password'] = 'mail1234567890';
$CONF['database_name'] = 'mail1234567890';
$CONF['dovecotpw'] = "/usr/bin/doveadm pw -r 5";
$CONF['encrypt'] = 'dovecot:ARGON2I';
$CONF['setup_password'] = '$2y$10$th72KE8xFcl4xccXI8gJzeBeUpIY9h3O06MgVsKkDB3Lf5GsB.Kxi';



if(@file_exists('/usr/bin/doveadm')) { // @ to silence openbase_dir stuff; see https://github.com/postfixadmin/postfixadmin/issues/171
    $CONF['dovecotpw'] = "/usr/bin/doveadm pw -r 5"; # debian
}
