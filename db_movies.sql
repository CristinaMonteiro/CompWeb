/*Step 1: Creating the Database Table
    users é o nome da tabela
    Esta é a estrutura do codigo abaixo:

    CREATE TABLE table_name (
    column1_name data_type constraints,
    column2_name data_type constraints,
    ....
);*/
CREATE TABLE users ( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, /*id*/
    username VARCHAR(50) NOT NULL UNIQUE,       /*username*/
    password VARCHAR(255) NOT NULL,             /*password*/
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE administradores ( 
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, /*id*/
    username VARCHAR(50) NOT NULL UNIQUE,       /*username*/
    email VARCHAR(70) NOT NULL,                 /*email*/
    password VARCHAR(255) NOT NULL,             /*password*/
    confirm_password VARCHAR(255) NOT NULL,     /* confirmar password*/
    admin_cod VARCHAR(50) NOT NULL,             /*para ser admin é necessário inserir um código - 1234*/
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

/*
NOTA: Antes existiam duas tabelas 'users' e 'newUsers'. A meu ver, apenas precisamos de
'users' e 'administradores'.
*/