# PHP implementation of JWT

PHP implementation of JWT for VueJs application

## DB

```sql
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_ad` varchar() default now(),  
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;
```
_id_ and _username_ fields should be pretty straight forward. The password field has to be generated using the [password_hash()](https://php.net/manual/en/ref
.password.php) function in PHP

You can generate hash [here](http://www.passwordtool.hu/php5-password-hash-generator), for example
