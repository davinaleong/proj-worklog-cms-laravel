# Create databases
CREATE DATABASE IF NOT EXISTS `worklog`;
CREATE DATABASE IF NOT EXISTS `worklog_test`;

# Create User and grant rightd
GRANT ALL ON worklog.* TO 'local'@'%' IDENTIFIED BY 'ent3r1n';
GRANT ALL ON worklog_test.* TO 'local'@'%' IDENTIFIED BY 'ent3r1n';

FLUSH PRIVILEGES;