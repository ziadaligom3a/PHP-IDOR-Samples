# PHP-IDOR-Samples

``
My php sucks I know :D
``

**These two code samples one of them with IDOR(insecure direct object references) vulnerability after learning about it on TryHackMe(Owasp top 10)**

## Data Scheme

Database name - idor;

``sql
MariaDB [idor]> show tables;
``

```
+----------------+
| Tables_in_idor |
+----------------+
| users          |
+----------------+
```


``sql
MariaDB [idor]> describe users;
``

```
+----------+--------------+------+-----+---------+----------------+
| Field    | Type         | Null | Key | Default | Extra          |
+----------+--------------+------+-----+---------+----------------+
| ID       | int(11)      | NO   | PRI | NULL    | auto_increment |
| name     | varchar(255) | YES  |     | NULL    |                |
| username | varchar(255) | YES  |     | NULL    |                |
| password | varchar(255) | YES  |     | NULL    |                |
| secret   | varchar(255) | YES  |     | NULL    |                |
+----------+--------------+------+-----+---------+----------------+

```
