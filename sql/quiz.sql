DROP TABLE IF EXISTS quiz;
CREATE TABLE quiz (
	topic_id INTEGER,
	question_id INTEGER NOT NULL,
	FOREIGN KEY(question_id) REFERENCES quiz_question(q_id),
	PRIMARY KEY(topic_id)
)