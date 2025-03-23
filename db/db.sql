-- ejecute estas sentencias en su base de datos  
CREATE DATABASE cryptoinvestment_app;
USE cryptoinvestment_app;

CREATE TABLE favorite_cryptos (
    id INT PRIMARY KEY NOT NULL,
    name VARCHAR(100) NOT NULL,
    symbol VARCHAR(10) NOT NULL,
    description TEXT,
    logo VARCHAR(255),
    website VARCHAR(255)
);