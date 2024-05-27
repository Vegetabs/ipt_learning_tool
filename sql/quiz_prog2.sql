DROP TABLE IF EXISTS quiz_progess;
CREATE TABLE quiz_progress (
	prog_id INTEGER AUTO_INCREMENT,
	user_name VARCHAR(40) NOT NULL,
	topic_id INTEGER NOT NULL,
	num_correct INTEGER NOT NULL,
	FOREIGN KEY(user_name) REFERENCES users(user_name),
	FOREIGN KEY(topic_id) REFERENCES quiz_question(topic_id),
	PRIMARY KEY(prog_id)
);