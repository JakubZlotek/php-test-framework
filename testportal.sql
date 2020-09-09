create table users
(
    id         int auto_increment
        primary key,
    username   varchar(50)                                                             not null,
    password   varchar(255)                                                            not null,
    imie       varchar(50)                                                             not null,
    nazwisko   varchar(50)                                                             not null,
    email      varchar(50)                                                             not null,
    admin      enum ('0', '1') default '0'                                             not null,
    created_at datetime        default current_timestamp()                             null,
    avatar     varchar(255)    default 'http://testy.jajuwa.pl/userdata/avatars/default.png' not null,
    constraint username
        unique (username)
);

INSERT INTO testportal.users (id, username, password, imie, nazwisko, email, admin, created_at, avatar) VALUES (1, 'admin', '$2y$10$Et47XSBrU2irj09trI6iteQe6TPC6NvopgXJ3H.rDX2/LAjz6bBWi', 'Admin', 'Adminowski', 'admin@admin.com', '1', '2020-09-05 11:04:17', 'https://avatarfiles.alphacoders.com/161/thumb-161326.png');
INSERT INTO testportal.users (id, username, password, imie, nazwisko, email, admin, created_at, avatar) VALUES (2, 'Uzytkownik 2', 'dsaasd', 'Antoni', 'Macierewicz', 'kubaxxxxaaa@wp.pl', '0', '2020-09-06 01:01:10', 'https://s2.thingpic.com/images/wM/zaBSbj63iypyGPdDvtzV3Eag.png');
INSERT INTO testportal.users (id, username, password, imie, nazwisko, email, admin, created_at, avatar) VALUES (3, 'Uzytkownik 3', 'asdasdas', 'Siara', 'Siarzewski', 'janwojo65@mail.ru', '0', '2020-09-06 01:01:10', 'https://lh3.googleusercontent.com/proxy/hheAgmP8Dhj8F5_v8agAbMZM_1TI1-OP6WNWYku3iUZxz7umtbs5wqFRZi0781VDmiZXdw_RRJZfZB8Lz3Sg9EwA_dcV');
INSERT INTO testportal.users (id, username, password, imie, nazwisko, email, admin, created_at, avatar) VALUES (4, 'Uzytkownik 4', '', 'Jan', 'Pawel', 'email@dupa.essa', '0', '2020-09-06 01:01:38', 'https://www.wykop.pl/cdn/c3201142/comment_1581049402KDjdQbQQU160kERvoEc2KN,w400.jpg');
INSERT INTO testportal.users (id, username, password, imie, nazwisko, email, admin, created_at, avatar) VALUES (5, 'Uzytkownik 5', '', 'Jerzy', 'Kiler', 'zs@belzyce.edu.pl', '0', '2020-09-06 01:01:38', 'https://avatarfiles.alphacoders.com/572/thumb-57256.jpg');
INSERT INTO testportal.users (id, username, password, imie, nazwisko, email, admin, created_at, avatar) VALUES (6, 'AdamMickiewicz', 'da', 'Adam', 'Mickiewicz', 'slowackito@dziwka.pl', '0', '2020-09-06 12:41:12', 'https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/f8/f856ba7cefcbb1a2786fab1722e9d77aad26834b_full.jpg');