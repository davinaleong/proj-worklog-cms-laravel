# Create databases
CREATE DATABASE IF NOT EXISTS `laravel`;
CREATE DATABASE IF NOT EXISTS `laravel_test`;

# Create User and grant rightd
GRANT ALL ON laravel.* TO 'local'@'%' IDENTIFIED BY 'ent3r1n';
GRANT ALL ON laravel_test.* TO 'local'@'%' IDENTIFIED BY 'ent3r1n';

FLUSH PRIVILEGES;