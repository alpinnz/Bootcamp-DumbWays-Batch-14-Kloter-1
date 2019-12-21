CREATE DATABASE count;

CREATE TABLE tb_caleg(id int(25) NOT NULL PRIMARY KEY, name varchar(25) NOT NULL, id_partai int(25) NOT NULL, earned_vote int(25));

CREATE TABLE tb_partai(id int(25) NOT NULL PRIMARY KEY, name varchar(25) NOT NULL);

ALTER TABLE tb_caleg ADD FOREIGN KEY (id_partai) REFERENCES tb_partai(id);