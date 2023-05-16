create database Registroz4;
use Registroz4;
create table Moto(
Placa_moto varchar (10) primary key,
modelo_moto varchar (40),
Cilindraje_moto int,
kilometros_recorridos int,
fecha varchar (40),
Caracteristicas varchar (500)
);

select * from Moto;