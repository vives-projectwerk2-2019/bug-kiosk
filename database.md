Voer deze sql code uit om de database te kunnen gebruiken
```sql
CREATE DATABASE bug;

USE bug;

CREATE TABLE users( 
 id int NOT NULL AUTO_INCREMENT, 
 firstname VARCHAR(64) NOT NULL, 
 lastname VARCHAR(64) NOT NULL, 
 password VARCHAR(64) NOT NULL, 
 email VARCHAR(64) NOT NULL, 
 shortName VARCHAR(4) NOT NULL,
PRIMARY KEY (id) 
 );
 ```