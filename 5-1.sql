CREATE DATABASE count;

CREATE TABLE tb_caleg(id int(25) NOT NULL PRIMARY KEY, name varchar(25) NOT NULL, id_partai int(25) NOT NULL, earned_vote int(25));

CREATE TABLE tb_partai(id int(25) NOT NULL PRIMARY KEY, name varchar(25) NOT NULL);

ALTER TABLE tb_caleg ADD FOREIGN KEY (id_partai) REFERENCES tb_partai(id);

INSERT INTO tb_caleg (id, name, id_partai, earned_vote) VALUES (1, 'Sera', 2, 100), (2, 'Dobleh', 1, 99);

INSERT INTO tb_partai (id, name) VALUES (1, 'Cilacap Santai'), (2, 'Cilacap Sejahtera');

SELECT * FROM tb_partai;

SELECT * FROM tb_caleg;