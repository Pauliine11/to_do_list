CREATE TABLE IF NOT EXISTS `todos`(
    `id_todos` Int Auto_increment NOT NULL,
    `description` Text,
    `creation_date` Date NOT NULL,
    `status` Varchar (150) NOT NULL,
    CONSTRAINT `todos_pk` PRIMARY KEY (`id_todos`)
);