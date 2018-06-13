CREATE TABLE Users
(
	id SERIAL PRIMARY KEY,
	username varchar(100) UNIQUE NOT NULL,
	password_hash varchar(255) NOT NULL
);

CREATE TABLE Posts
(
	id SERIAL PRIMARY KEY NOT NULL,
	user_id int NOT NULL REFERENCES Users(id),
	title varchar(255) NOT NULL,
	content TEXT NOT NULL,
	post_date varchar(255) NOT NULL
);

