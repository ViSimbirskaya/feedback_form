

System requirements: 
 Windows 8, 8.1, 10.
 PHP Version 8.1.7

  Visual Studio Code
    Версия: 1.67.2 (user setup)
    Фиксация: c3511e6c69bb39013c4a4b7b9566ec1ca73fc4d5
    Дата: 2022-05-17T18:15:52.058Z
    Electron: 17.4.1
    Chromium: 98.0.4758.141
    Node.js: 16.13.0
    V8: 9.8.177.13-electron.0
    ОС: Windows_NT x64 10.0.19044

  Open Server 5.4.2

  Apache: 2.2.31, 2.4.38, 2.4.41, 2.4.53 + auth_ntlm, fcgid, maxminddb, xsendfile
  Bind: 9.16.28
  FTP FileZilla: 0.9.60
  Ghostscript: 9.56.1
  Nginx: 1.21.6 + ssl_preread, image_filter, geoip, geoip2, brotli
  NNCron Lite: 1.17
  Sendmail: 32

  Adminer: 4.8.1
  ConEmu: 22.04.18
  HeidiSQL: 12.0.0.6468
  PHPMemcachedAdmin: 1.3
  PHPMyAdmin: 5.1.3
  PHPPgAdmin: 7.13.0
  PHPRedisAdmin: 1.17.1

  MariaDB: 5.5.68, 10.1.48, 10.2.43, 10.3.34, 10.4.24, 10.5.15, 10.6.7
  Memcached: 1.2.6, 1.4.5, 1.6.7
  MongoDB: 2.4.14, 2.6.12, 3.0.15, 3.2.22, 3.4.24, 3.6.23, 4.0.28, 4.2.19, 4.4.13, 5.0.8
  MySQL: 5.1.73, 5.5.62, 5.6.51, 5.7.38, 8.0.29
  PostgreSQL: 9.2.24, 9.3.25, 9.4.26, 9.5.25, 9.6.24, 10.20, 11.15, 12.10, 13.6, 14.2
  Redis: 2.8.2402, 3.0.504, 3.2.100, 4.0.14.2, 5.0.14.1

Files:
  functions
    connection.php
    feedback_form.php
  feedback.php
  index.php
  navbar.php
  success.php
  README.md

To open the dump, follow the algorithm:

1.Open MySQL/MariaDB/HeidiSQL or the same one.
2.Select "file-download SQL-file" and choose file "backup.sql"


To correctly launch the web application, follow the algorithm:

1.Place the folder with files in the directory of the local server.
2.Open files with any source-code editor.
3.Open file "feedback_form.php". On string 26 instead of "admin@email.ru" put your amdin e-mail from site "https://temp-mail.org/ru/"
4.Create a table in the database.
5.Fill in data about connecting to the database in "connection.php"

CREATE TABLE pokemones (
  id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, 
  PRIMARY KEY(id), 
  email VARCHAR(255) NOT NULL,
  login VARCHAR(30) NOT NULL,
  is_ability_fly BOOLEAN, 
  is_ability_hug BOOLEAN, 
  gender TINYINT, 
  description TEXT, 
  chosen_character TINYINT
);

6.Launch the application with your server.
7.Create your first Pokémon.