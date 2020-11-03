apt install php mysql 
mysql -e "CREATE DATABASE BASEDEDATOS"
mysql -e "CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin'"
mysql -e "GRANT ALL PRIVILEGES ON BASEDEDATOS.* TO 'admin'@'localhost; FLUSH PRIVILEGES"
mysql -e "CREATE TABLE BASEDEDATOS.TAULA1(descripcio TEXT, prioritat TEXT)"

