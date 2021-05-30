/*create database itec

use itec

create table Pessoas (
id_pessoa int auto_increment primary key,
nome varchar(100) not null,
sexo char(1) not null,
nasc date not null, 
celular varchar(12) not null,
telefone varchar(11) 
);

create table Cargo (
id_cargo int auto_increment primary key,
cargo varchar(100) not null,
salario decimal(10,2) not null,
id_departamento int not null
);

create table Departamento (
id_departamento int auto_increment primary key,
departamento varchar(100) not null,
operação varchar(100),
localização varchar(100)
)

insert into Pessoas (nome, sexo, idade, celular) values ('fábio', 'm', '25', '940028922')

select *
from pessoas


alter table pessoas
add column id_cargo int not null;

alter table pessoas
add constraint foreign key(id_cargo) references Cargo(id_cargo);



select *
from cargo


insert into cargo (cargo, salario, id_departamento) values ('Programador', '500.50', 1);

alter table cargo 
add constraint foreign key(id_departamento) references departamento(id_departamento) ;

select *
from cargo

update cargo
set id_departamento = null
where id_cargo = 1



insert into departamento (departamento, operação, localização) values ('Contábil', 'não sei', 'jabaquara');


select * 
from departamento

select *
from pessoas;
,

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('bruno', 'm', '1996-03-19', '451351', '', 1 )

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('fábio', 'm', '1996-03-19','4135151', '',  1 )

insert into cargo (cargo, salario, id_departamento) values('Contador', 4000.00, 1)



select 
	p.id_pessoa as id_pessoa, 
    p.nome as nome, 
    date_format(p.nasc, "%d/%m/%Y") as nasc,
    concat(c.cargo, ' ', d.departamento) as cargo, 
    p.celular as celular
from pessoas as p
inner join cargo as c
inner join departamento as d
where p.id_cargo = c.id_cargo
and c.id_departamento = d.id_departamento



select 
	concat(c.cargo, ' - ', d.departamento) as cargo
from cargo as c 
inner join departamento as d 
where c.id_departamento = d.id_departamento;

insert into cargo (cargo, salario, id_departamento) values('Programador', 3000.00, 2);

select *
from pessoas


update pessoas set nome="teste" , sexo="f" , nasc='1996-01-01' , celular="4" , telefone="4" , id_cargo=1 where  id_pessoa = 6



select 
	id_cargo,
    cargo, 
    departamento, 
    salario
from cargo as c
inner join departamento as d
where c.id_departamento = d.id_departamento
*/
  




















