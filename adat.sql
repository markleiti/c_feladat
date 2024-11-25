
create table futar(
id int auto_increment primary key,
nev  text,
fiz int,
furgonid int unique,
motorid int,
constraint motorid foreign key(motorid) references motor(id),
constraint furgonid foreign key(furgonid) references furgon(id))

