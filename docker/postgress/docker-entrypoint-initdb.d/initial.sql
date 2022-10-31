
create user roundcubeadmin with encrypted password 'roundcubeadmin_1234';
create database roundcube;
grant all privileges on database roundcube to roundcubeadmin;