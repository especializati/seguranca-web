-- docker compose exec -it db bash
-- psql -U admin

CREATE DATABASE security;

\c security;

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (email, password) VALUES ('admin@admin.com', 'admin'); -- no security password

CREATE TABLE cars (
  id SERIAL PRIMARY KEY,
  brand VARCHAR(255),
  model VARCHAR(255),
  year INT
);
INSERT INTO cars (brand, model, year) VALUES ('Ford', 'Mustang', 1964);
INSERT INTO cars (brand, model, year) VALUES ('Hacked', '<script>alert("página hackeada")</script>', 1964);