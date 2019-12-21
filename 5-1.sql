-- Buatlah suatu database dengan nama count pada database tersebut terdapat 2 tabel dengan spesifikasi sebagai berikut :

CREATE DATABASE count;

CREATE TABLE tb_caleg(id int(25) NOT NULL PRIMARY KEY, name varchar(25) NOT NULL, id_partai int(25) NOT NULL, earned_vote int(25));

CREATE TABLE tb_partai(id int(25) NOT NULL PRIMARY KEY, name varchar(25) NOT NULL);

ALTER TABLE tb_caleg ADD FOREIGN KEY (id_partai) REFERENCES tb_partai(id);

INSERT INTO tb_caleg (id, name, id_partai, earned_vote) VALUES (1, 'Sera', 2, 100), (2, 'Dobleh', 1, 99);

INSERT INTO tb_partai (id, name) VALUES (1, 'Cilacap Santai'), (2, 'Cilacap Sejahtera');

-- Tampilkan isi dari masing masing tabel.
SELECT * FROM tb_partai;
SELECT * FROM tb_caleg;

-- Tambahkan 1 data partai dengan nama “Cilacap Aman”.
INSERT INTO tb_partai (id, name) VALUES (3, 'Cilacap Aman');

-- Rubahlah nama partai Cilacap Sejahtera menjadi Cilacap Makmur.
UPDATE tb_partai SET name = "Cilacap Makmur" WHERE id=2;

-- Tambahkan 2 data pada caleg dengan nama “Kabur” lalu partai yang di usung “Cilacap Aman”. “Astina” partai yang di usung “Cilacap Aman”.
INSERT INTO tb_caleg (id, name, id_partai, earned_vote) VALUES (3, 'Kabur', 3, 0), (4, 'Astina', 3, 0);

-- Ubah dan tambahkan earn vote pada data “Kabur” sebesar “69” dan pada data “Astina” sebesar “21” 
UPDATE tb_caleg SET earned_vote = "69" WHERE id=3;
UPDATE tb_caleg SET earned_vote = "21" WHERE id=4;

-- Ubahlah 1 caleg dengan nama Sera dengan ketentuan berikut, “Is Bos”,”2”,”70”
UPDATE tb_caleg SET name="Is Bos", id_partai="2", earned_vote = "70" WHERE id=1;

-- Hapus caleg dengan nama “Astina”.
DELETE tb_caleg WHERE id=4;

-- Tampilkan data caleg beserta nama partai yang di inisialisasikan menjadi partai menggunakan syntax JOIN.
SELECT tb_caleg.id AS ID, tb_caleg.name AS Nama, tb_partai.name AS Partai, tb_caleg.earned_vote AS Vote FROM tb_caleg INNER JOIN tb_partai ON tb_caleg.id_partai = tb_partai.id WHERE tb_caleg.id = '3' ;

-- Tampilkan data caleg dengan nama “Kabur” beserta nama partai yang mengusung.


