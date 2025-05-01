create database unsia;

use unsia;
create table mahasiswa (
    id int auto_increment primary key,
    nama varchar(255) not null,
    nim varchar(255) not null unique,
    jenis_kelamin enum('L', 'P') not null,
    kelas varchar(255) not null,
    program_studi varchar(255) not null,
    angkatan int not null
);

insert into mahasiswa (nama, nim, jenis_kelamin, kelas, program_studi, angkatan) values
('Asep', '1234567890', 'L', 'A', 'Teknik Informatika', 2020),
('Budi', '0987654321', 'L', 'B', 'Sistem Informasi', 2021),
('Citra', '1122334455', 'P', 'A', 'Teknik Informatika', 2020),
('Dewi', '5566778899', 'P', 'B', 'Sistem Informasi', 2021),
('Eko', '2233445566', 'L', 'A', 'Teknik Informatika', 2020);

