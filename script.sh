apt install apache2 -y
apt install mysql-server -y
apt install php-mysql -y
apt install php


mysql -e "CREATE DATABASE BASEDEDATOS"
mysql -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin'"
mysql -e "GRANT ALL PRIVILEGES ON BASEDEDATOS.* TO 'admin'@'localhost; FLUSH PRIVILEGES"
mysql -e "CREATE TABLE BASEDEDATOS.TAULA1(descripcio TEXT, prioritat TEXT)"

