
DROP DATABASE IF EXISTS projeto1;
CREATE DATABASE projeto1;''
USE projeto1;

CREATE TABLE usuario 
(  
	id_usuario int(4) PRIMARY KEY auto_increment,
    nome_usuario varchar(50) NOT NULL,
    email_usuario varchar (50) NOT NULL,
    fone_usuario varchar(30) NULL,
    senha 		 varchar(30) NOT NULL 
);

-- INSERIR DADOS

/* use projeto1;
    INSERIR DADOS
INSERT INTO usuario
(nome_usuario, fone_usuario, email_usuario, senha) VALUES ('Cássio', '(18) 3622-9046', 'cassio@mail.com', '1234');
SELECT * FROM usuario;
*/