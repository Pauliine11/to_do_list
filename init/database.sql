CREATE TABLE IF NOT EXISTS `todos`(
    `id_todos` Int Auto_increment NOT NULL,
    `title` Varchar (150) NOT NULL,
    `description` Text,
    `status` Varchar (150) NOT NULL,
    CONSTRAINT `todos_pk` PRIMARY KEY (`id_todos`)
);
