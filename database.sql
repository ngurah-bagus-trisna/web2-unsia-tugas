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

