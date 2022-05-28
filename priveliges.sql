/*permissões*/ 
mysql -u root -p

/*To create a user that can connect from any host, use the '%' wildcard as a host part
CREATE USER 'newuser'@'%' IDENTIFIED BY 'user_password'; */
CREATE USER 'Cris'@'%' IDENTIFIED BY '1234';

/*DAR PERMISSÕES/PRIVILÉGIOS
GRANT ALL PRIVILEGES ON database_name.* TO 'database_user'@'localhost';*/
GRANT ALL PRIVILEGES ON db_movies.* TO 'administradores'@'localhost';

/*MOSTRAR PRIVILEGIOS
SHOW GRANTS FOR 'database_user'@'localhost';*/
SHOW GRANTS FOR 'db_movies_Cris'@'localhost';

/*RETIRAR PERMISSÕES/PRIVILÉGIOS*/
REVOKE ALL PRIVILEGES ON database_name.* FROM 'users'@'localhost';