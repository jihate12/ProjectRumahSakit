

create table pasien
(id_pasien varchar(12) PRIMARY KEY not null,
nama_pasien varchar(50)not null,
alamat text,
no_tlp varchar(12) not null,
jenis_pembayaran varchar(8) not null);

create table dokter
(id_dokter varchar(10) PRIMARY KEY not null,
BPOM varchar(12) not null,
nama_dokter varchar(100) not null,
spesialis_dokter varchar(50) not null,
status_dokter varchar(8) not null,
foreign key (BPOM) references obat (BPOM));

create table rekam_medis
(id_rekam_medis varchar(10) PRIMARY key not null,
id_pasien varchar(12) not null,
id_dokter varchar(10) not null,
foreign key (id_pasien) references pasien (id_pasien),
foreign key (id_dokter) references dokter (id_dokter));

create table obat 
(BPOM varchar(15) PRIMARY KEY not null,
nama_obat varchar(100) not null,
merk_obat varchar(100) not null,
jenis_obat varchar(50) not null,
produsen_obat varchar(50) not null,
gambar_obat longblob );

create table apoteker
(id_apoteker varchar(10) PRIMARY KEY not null,
BPOM varchar(15) not null,
nama_apoteker varchar(50) not null,
foreign key (BPOM) references obat (BPOM));

