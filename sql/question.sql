DROP TABLE IF EXISTS quiz_question;
CREATE TABLE quiz_question (
	q_id INTEGER AUTO_INCREMENT,
	q_content VARCHAR(100) NOT NULL, 
	a_1 INTEGER NOT NULL,
	a_2 INTEGER NOT NULL,
	a_3 INTEGER NOT NULL,
	a_4 INTEGER NOT NULL,
	FOREIGN KEY(a_1) REFERENCES quiz_answers(a_id),
	FOREIGN KEY(a_2) REFERENCES quiz_answers(a_id),
	FOREIGN KEY(a_3) REFERENCES quiz_answers(a_id),
	FOREIGN KEY(a_4) REFERENCES quiz_answers(a_id),
	PRIMARY KEY(q_id)
);