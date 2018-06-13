CREATE TABLE Users
(
	id SERIAL PRIMARY KEY,
	username varchar(100) UNIQUE NOT NULL,
	password_hash varchar(255) NOT NULL
);

