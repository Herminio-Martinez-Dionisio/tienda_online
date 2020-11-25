
create table productos(
id_producto INTEGER PRIMARY KEY AUTOINCREMENT,
producto varchar (100) not null,
precio float (30) not null,
existencias int (100) not null);
create table tickets(
id_tickets INTEGER PRIMARY KEY AUTOINCREMENT,
fecha varchar (50) not null,
cantidad_producto int (100) not null,
producto varchar (100) not null,
total_producto float (20));