DROP TABLE IF EXISTS quiz_answers;
CREATE TABLE quiz_answers (
	a_id INTEGER AUTO_INCREMENT,
	a_content VARCHAR(30) NOT NULL,
	a_correct BOOLEAN NOT NULL,
	PRIMARY KEY(a_id)
);