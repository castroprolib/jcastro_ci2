select version();

CREATE SCHEMA `jcastro_ci2` DEFAULT CHARACTER SET utf8 ;

show databases;

show databases;

use jcastro_ci2;

-- Tabla Persons
create table if not exists persons(
id int auto_increment primary key,
first_name varchar(30) not null,
last_name varchar(30) not null,
sex enum('male','female') not null,
country_id int not null,
created_at date not null,
updated date not null
);

-- Tabla Countrys
create table if not exists countrys(
id int auto_increment primary key,
country varchar(50) not null
);

-- Clave Foranea
alter table persons
add constraint fk_countrys
foreign key (country_id)
references countrys(id);



show tables;

describe persons;

describe countrys;

select * from jcastro_ci2.persons;


select * from jcastro_ci2.countrys;


insert into jcastro_ci2.countrys(country)
values('Argentina'),
('Venezuela'),
('México'),
('Chile'),
('Brasil'),
('República Dominicana'),
('Costa Rica'),
('Puerto Rico'),
('Panamá'),
('Uruguay'),
('Ecuador'),
('Colombia'),
('Guatemala'),
('Paraguay'),
('Perú'),
('Bolivia'),
('Cuba'),
('El Salvador'),
('Nicaragua'),
('Belice'),
('Haití');

-- ordenar paises alfabeticamente
select id,country from jcastro_ci2.countrys
order by country asc;


