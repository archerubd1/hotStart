CREATE TABLE learners (
    learner_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);

CREATE TABLE orientation_inputs (
    learner_id INT,
    comfort_level VARCHAR(50),
    learning_preference VARCHAR(50),
    intent_clarity VARCHAR(50),
    created_on DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE orientation_suggestions (
    learner_id INT,
    suggestion_text TEXT,
    rationale TEXT,
    learner_action VARCHAR(50) DEFAULT NULL,
    optional_flag BOOLEAN DEFAULT 1,
    generated_on DATETIME
);

CREATE TABLE orientation_log (
    learner_id INT,
    event_type VARCHAR(50),
    created_on DATETIME DEFAULT CURRENT_TIMESTAMP
);
