CREATE DATABASE Notes_DB;
CREATE TABLE notes_table ( 
      ID INT NOT NULL,
      AuthorName VARCHAR(100) NOT NULL , 
      Title VARCHAR(100) NOT NULL ,
      Note VARCHAR(500) NOT NULL ,
      PRIMARY KEY (ID)
);
