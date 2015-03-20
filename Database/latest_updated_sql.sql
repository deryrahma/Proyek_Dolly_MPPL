/*==============================================================*/
/* Table: ANAK_BINAAN                                           */
/*==============================================================*/
create table ANAK_BINAAN
(
   ID_ANAK              int not null,
   ID_KAKAK             int,
   NAMA_ANAK            varchar(100),
   JK_ANAK              char(1),
   TEMPAT_LAHIR         varchar(50),
   TANGGAL_LAHIR        date,
   AGAMA                varchar(30),
   ANAK_KE              varchar(1),
   ALAMAT_SISWA         varchar(100),
   TANGGAL_MASUK        date,
   KELAS                varchar(1),
   NAMA_SEKOLAH         varchar(50),
   SEKOLAH_ASAL         varchar(100),
   ALAMAT_SEKOLAH       varchar(100),
   NAMA_AYAH            varchar(100),
   NAMA_IBU             varchar(100),
   ALAMAT_ORTU          varchar(100),
   PEKERJAAN_AYAH       varchar(100),
   PEKERJAAN_IBU        varchar(100),
   primary key (ID_ANAK)
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
/* Table: LAPORAN_HARIAN                                        */
/*==============================================================*/
create table LAPORAN_HARIAN
(
   ID_LAP_HARIAN        int not null,
   ID_PELATIHAN         int,
   HARI_LAP_HARIAN      varchar(10),
   TANGGAL_LAP_HARIAN   date,
   SKALA_PARAMETER      varchar(10),
   primary key (ID_LAP_HARIAN)
);

/*==============================================================*/
/* Table: LAPORAN_MINGGUAN                                      */
/*==============================================================*/
create table LAPORAN_MINGGUAN
(
   ID_LAP_MINGGUAN      int not null,
   ID_LAP_HARIAN        int,
   HARI_LAP_MINGGUAN    varchar(10) not null,
   TANGGAL_LAP_MINGGUAN date not null,
   PERILAKU_YANG_DIAMATI varchar(500) not null,
   PERUBAHAN_PERILAKU_YANG_TERJADI varchar(500) not null,
   SUMBER_INFORMASI     varchar(100) not null,
   CARA_PENDEKATAN      varchar(500) not null,
   KETERANGAN           varchar(500),
   CERITA_MENARIK       varchar(1024) not null,
   KESIMPULAN_BULANAN   varchar(1024),
   primary key (ID_LAP_MINGGUAN)
);

/*==============================================================*/
/* Table: MEMPUNYAI                                             */
/*==============================================================*/
create table MEMPUNYAI
(
   ID_ANAK              int not null,
   ID_PELATIHAN         int not null,
   NILAI                int,
   primary key (ID_ANAK, ID_PELATIHAN)
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

alter table ANAK_BINAAN add constraint FK_RELATIONSHIP_1 foreign key (ID_KAKAK)
      references KAKAK_ASUH (ID_KAKAK) on delete restrict on update restrict;

alter table LAPORAN_HARIAN add constraint FK_RELATIONSHIP_4 foreign key (ID_PELATIHAN)
      references PELATIHAN (ID_PELATIHAN) on delete restrict on update restrict;

alter table LAPORAN_MINGGUAN add constraint FK_RELATIONSHIP_5 foreign key (ID_LAP_HARIAN)
      references LAPORAN_HARIAN (ID_LAP_HARIAN) on delete restrict on update restrict;

alter table MEMPUNYAI add constraint FK_MEMPUNYAI foreign key (ID_ANAK)
      references ANAK_BINAAN (ID_ANAK) on delete restrict on update restrict;

alter table MEMPUNYAI add constraint FK_MEMPUNYAI2 foreign key (ID_PELATIHAN)
      references PELATIHAN (ID_PELATIHAN) on delete restrict on update restrict;

alter table PARAMETER add constraint FK_RELATIONSHIP_3 foreign key (ID_PELATIHAN)
      references PELATIHAN (ID_PELATIHAN) on delete restrict on update restrict;
