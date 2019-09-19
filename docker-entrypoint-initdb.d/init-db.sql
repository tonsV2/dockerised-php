CREATE TABLE IF NOT EXISTS something (
  id SERIAL PRIMARY KEY,
  title VARCHAR(100) NOT NULL
);

INSERT INTO something (title) VALUES ('something');
INSERT INTO something (title) VALUES ('something2');
INSERT INTO something (title) VALUES ('something else');
