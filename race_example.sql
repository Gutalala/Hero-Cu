CREATE TABLE event
(
	id SERIAL PRIMARY KEY,
	name VARCHAR(100) NOT NULL,
	location VARCHAR(100) NOT NULL,
	"date" date 
);

INSERT INTO event(name, location, "date") VALUES ('Color Run', 'Awesomeville', '2018');
