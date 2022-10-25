drop database if exists sistemaE;
create database sistemaE;
use sistemaE;
create table Alumno(
    id int not null auto_increment,
    nombre varchar(25),
    apellido varchar(25),
    dni int not null,
    año int,
    primary key (id,dni)
);

create table Calificacion(
    id int not null auto_increment,
    id_alumno int not null,
    materia varchar(25),
    cuatrimestre int,
    nota int not null,
    fecha date not null,
    primary key (id),
    foreign key (id_alumno) REFERENCES Alumno(id)
);

insert into Alumno(nombre,apellido,dni,año) values('Dylan','Seltzer',45666849,5);
insert into Alumno(nombre,apellido,dni,año) values('Gonzalo','Gimenez',44568941,5);
insert into Alumno(nombre,apellido,dni,año) values('Diego','Sanchez',46214568,4);
insert into Alumno(nombre,apellido,dni,año) values('Agustin','Barcia',46123846,4);

insert into Calificacion(id_alumno,materia,cuatrimestre,nota,fecha) values(1,'Matematica',2,9,'2022-9-25');
insert into Calificacion(id_alumno,materia,cuatrimestre,nota,fecha) values(1,'Lengua',2,10,'2022-10-25');
insert into Calificacion(id_alumno,materia,cuatrimestre,nota,fecha) values(1,'Matematica',1,10,'2022-5-25');

insert into Calificacion(id_alumno,materia,cuatrimestre,nota,fecha) values(2,'Lengua',2,9,'2022-9-20');

insert into Calificacion(id_alumno,materia,cuatrimestre,nota,fecha) values(3,'Lengua',2,7,'2022-10-16');
