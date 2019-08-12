CREATE DATABASE IF NOT EXISTS notes_DB;
CREATE TABLE notes_table ( 
      ID INT NOT NULL,
      AuthorName VARCHAR(255) NOT NULL , 
      Title VARCHAR(255) NOT NULL ,
      Note TEXT NOT NULL ,
      PRIMARY KEY (ID, Title)
);
