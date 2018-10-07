create database lap_trinh_quep;
use lap_trinh_quep;

create table khoa(
	ID int auto_increment primary key,
    ten_khoa char(20) not null
);

create table nganh(
	ID int auto_increment primary key,
    ma_khoa int not null,
    ten_nganh char not null,
    foreign key (ma_khoa) references khoa(ID)
);

create table nien_khoa(
	ID int auto_increment primary key,
    thoi_gian_bat_dau date not null,
    thoi_gian_ket_thuc date not null
);

create table lop(
	ID int auto_increment primary key,
    ma_nganh int not null,
    ma_nien_khoa int not null,
    nam int not null,
    ten_lop char not null,
    foreign key (ma_nganh) references nganh(ID),
    foreign key (ma_nien_khoa) references nien_khoa(ID)
);

create table giang_vien(
	ID int auto_increment primary key,
    ma_nganh int not null,
    ten_gv varchar(50) not null,
    ngay_sinh date not null,
    dia_chi varchar(200) not null,
    sdt char(10) not null,
    email varchar(50) not null,
	foreign key (ma_nganh) references nganh(ID)    
);

create table mon(
	ID int auto_increment primary key,
    ma_nganh int not null,
    ten_mon varchar(10),
    foreign key (ma_nganh) references nganh(ID)
);

create table user(
	ID int not null primary key,
    password char not null,
    foreign key (ID) references giang_vien(ID)
);

create table de_thi(
	ID int auto_increment primary key,
    ma_giang_vien int not null,
    ma_mon int not null,
    so_cau_hoi int(3) not null,
    ghi_chu varchar(200) not null,
    ngay_ra_de date not null,
    hoc_ky char(2) not null,
    nam_hoc char(10) not null,
    foreign key (ma_giang_vien) references giang_vien(ID),
    foreign key (ma_mon) references mon(ID)
);

create table cau_hoi(
	ID int auto_increment primary key,
    ma_de_thi int not null,
    noi_dung varchar(500) not null,
    muc_do int(3) not null,
    foreign key (ma_de_thi) references de_thi(ID)
);

create table dap_an(
	ID int auto_increment primary key,
    ma_cau_hoi int not null,
    noi_dung varchar(100),
    trang_thi enum('dung', 'sai'),
    foreign key (ma_cau_hoi) references cau_hoi(ID)
);

create table hinh_anh(
	ID int auto_increment primary key,
    ma_cau_hoi int not null,
    url text not null,
    foreign key (ma_cau_hoi) references cau_hoi(ID)
);