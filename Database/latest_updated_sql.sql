/*==============================================================*/
/* Table: ANAK_BINAAN                                           */
/*==============================================================*/
create table ANAK_BINAAN
(
   ID_ANAK              int not null,
   ID_KAKAK             int,
   NAMA_ANAK            varchar(100) not null,
   JK_ANAK              char(1) not null,
   TEMPAT_LAHIR         varchar(50) not null,
   TANGGAL_LAHIR        date not null,
   AGAMA                varchar(30) not null,
   ANAK_KE              varchar(1) not null,
   ALAMAT_SISWA         varchar(100) not null,
   KELAS                varchar(1) not null,
   TANGGAL_MASUK        date not null,
   SEKOLAH_ASAL         varchar(100) not null,
   ALAMAT_SEKOLAH       varchar(100) not null,
   NAMA_AYAH            varchar(100) not null,
   NAMA_IBU             varchar(100) not null,
   ALAMAT_ORTU          varchar(100) not null,
   PEKERJAAN_AYAH       varchar(100),
   PEKERJAAN_IBU        varchar(100),
   FOTO                 varchar(500) not null,
   primary key (ID_ANAK)
);

/*==============================================================*/
/* Table: JADWAL_PELATIHAN                                      */
/*==============================================================*/
create table JADWAL_PELATIHAN
(
   ID_JADWAL            int not null,
   ID_PELATIHAN         int,
   JADWAL_PELATIHAN     date,
   primary key (ID_JADWAL)
);

/*==============================================================*/
/* Table: KAKAK_ASUH                                            */
/*==============================================================*/
create table KAKAK_ASUH
(
   ID_KAKAK             int not null,
   NAMA_KAKAK           varchar(50) not null,
   ALAMAT_KAKAK         varchar(150) not null,
   NO_TELPON_KAKAK      varchar(13) not null,
   USERNAME             varchar(15),
   PASSWORD             varchar(10) not null,
   primary key (ID_KAKAK)
);

/*==============================================================*/
/* Table: LAPORAN_MINGGUAN                                      */
/*==============================================================*/
create table LAPORAN_MINGGUAN
(
   ID_LAP_MINGGUAN      int not null,
   ID_ANAK              int,
   HARI_LAP_MINGGUAN    varchar(10) not null,
   TANGGAL_LAP_MINGGUAN date not null,
   PERILAKU_YANG_DIAMATI varchar(500) not null,
   PERUBAHAN_PERILAKU_YANG_TERJADI varchar(500) not null,
   SUMBER_INFORMASI     varchar(100) not null,
   CARA_PENDEKATAN      varchar(500) not null,
   KETERANGAN           varchar(500),
   CERITA_MENARIK       varchar(1024) not null,
   primary key (ID_LAP_MINGGUAN)
);

/*==============================================================*/
/* Table: PARAMETER                                             */
/*==============================================================*/
create table PARAMETER
(
   ID_PARAMETER         int not null,
   ID_PELATIHAN         int,
   PARAMETER            varchar(1024) not null,
   primary key (ID_PARAMETER)
);

/*==============================================================*/
/* Table: PELATIHAN                                             */
/*==============================================================*/
create table PELATIHAN
(
   ID_PELATIHAN         int not null,
   NAMA_PELATIHAN       varchar(100) not null,
   primary key (ID_PELATIHAN)
);

/*==============================================================*/
/* Table: RAPOR_HARIAN                                          */
/*==============================================================*/
create table RAPOR_HARIAN
(
   ID_RAPOR             int not null,
   ID_ANAK              int,
   ID_JADWAL            int,
   ID_PARAMETER         int,
   NILAI                int not null,
   primary key (ID_RAPOR)
);

alter table ANAK_BINAAN add constraint FK_RELATIONSHIP_1 foreign key (ID_KAKAK)
      references KAKAK_ASUH (ID_KAKAK) on delete restrict on update restrict;

alter table JADWAL_PELATIHAN add constraint FK_RELATIONSHIP_5 foreign key (ID_PELATIHAN)
      references PELATIHAN (ID_PELATIHAN) on delete restrict on update restrict;

alter table LAPORAN_MINGGUAN add constraint FK_RELATIONSHIP_7 foreign key (ID_ANAK)
      references ANAK_BINAAN (ID_ANAK) on delete restrict on update restrict;

alter table PARAMETER add constraint FK_RELATIONSHIP_4 foreign key (ID_PELATIHAN)
      references PELATIHAN (ID_PELATIHAN) on delete restrict on update restrict;

alter table RAPOR_HARIAN add constraint FK_RELATIONSHIP_2 foreign key (ID_ANAK)
      references ANAK_BINAAN (ID_ANAK) on delete restrict on update restrict;

alter table RAPOR_HARIAN add constraint FK_RELATIONSHIP_3 foreign key (ID_PARAMETER)
      references PARAMETER (ID_PARAMETER) on delete restrict on update restrict;

alter table RAPOR_HARIAN add constraint FK_RELATIONSHIP_6 foreign key (ID_JADWAL)
      references JADWAL_PELATIHAN (ID_JADWAL) on delete restrict on update restrict;
