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

  

insert into cargo (cargo, salario, id_departamento) values ('Desenvolvedor', '500.50', 1);


select 
	
	 distinct c.cargo as cargo , 
     c.id_cargo,
     d.departamento as departamento
from pessoas as p
inner join cargo as c
inner join departamento as d
where p.id_cargo = c.id_cargo
and c.id_departamento = d.id_departamento

select 
p.id_pessoa as id_pessoa, 
    p.nome as nome , date_format(p.nasc, '%d/%m/%Y') as nasc, 
    concat(c.cargo, ' ', d.departamento) as cargo, 
    p.celular as celular
    from pessoas as p inner join cargo as c inner join departamento as d
   where  p.id_cargo = c.id_cargo and c.id_departamento = d.id_departamento and id_cargo = 8



insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Gustavo Horácio', 'm', '2002-7-15', '94905063','88043960', 5);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Beatriz Silva', 'm', '1975-2-3', '61364557','64487950', 9);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Ana Lafer', 'f', '1970-3-23', '25516543','12842157', 5);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Gustavo Alves', 'f', '1977-2-12', '59176889','88045609', 5);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Gustavo Abreu', 'm', '1970-11-6', '48596360','95124747', 8);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Ygor Matos', 'm', '2006-5-12', '25240626','22919047', 2);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Beatriz Adriano', 'm', '1991-9-17', '47000092','94332136', 5);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Leandro Abrantes', 'm', '2019-10-14', '75950596','23754071', 9);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Sara Adriano', 'f', '1983-5-27', '1378473','30757944', 9);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Beatriz Abrahao', 'm', '2012-8-9', '10814904','55495318', 2);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('João Nepomuceno', 'f', '1974-12-7', '30936101','26762325', 8);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Paloma Nepomuceno', 'm', '1978-6-15', '43059169','18009367', 8);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Alberto Silva', 'm', '1976-5-29', '31086601','67622426', 5);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Ana Luiza Acosta', 'm', '1987-10-13', '84187170','31118466', 5);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Gabriel Abrantes', 'm', '1985-9-18', '77325821','70332984', 5);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Ygor Abadia', 'm', '2009-3-17', '17304750','97829426', 9);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Gustavo Matos', 'f', '1982-1-11', '61742510','2944834', 5);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Gustavo Horácio', 'm', '1986-8-11', '9733797','96635439', 8);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Ana Acosta', 'f', '1979-11-12', '80750534','44979658', 8);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Igor Matos', 'm', '2020-9-15', '60832074','76739137', 2);

insert into pessoas (nome, sexo, nasc, celular, telefone, id_cargo) values ('Beatriz Lafer', 'm', '2013-8-6', '45209139','86749681', 8);


select *
from pessoas
limit 0, 1;



alter table pessoas
add column usuario varchar(255) unique 


alter table pessoas
add column senha varchar(255) 

update pessoas 
set usuario = 'bruno', senha = 'bruno'
where id_pessoa = 3*/

select *
from pessoas
where usuario = 'bruno'








