Professor solicitou para que criemos níveis de acesso no banco de dados:

0- admin
1 - diretor
2 - Gerente 
3 - Operador
4 - Cliente


e ainda solicitou para que quando o usuario inserir o cpf na tela, redirecionar para a respectiva tela que equivale ao seu nivel de acesso no banco. Ele citou os metedos header(localition:"..")

alem disso, temos que fazer os inserts no banco para cada nivel de acesso de usuario de teste para testar as rotas e as comparações.

CREATE TABLE `sistema`.`usuario` (`CPF` VARCHAR(11) NOT NULL , `Nome` VARCHAR(50) NOT NULL , `Nivel` TINYINT(1) NOT NULL , PRIMARY KEY (`CPF`)) ENGINE = InnoDB;

e ainde depois rodei uma alter table com o campo senha_hash um varchar com (60) 

alem disso, temos que criptografar as senhas com metodo de criptografia md5. 