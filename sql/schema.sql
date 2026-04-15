CREATE DATABASE IF NOT EXISTS student_notes_manager;
use student_notes_manager;

CREATE TABLE student_notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    note_text TEXT NOT NULL,
    status VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO student_notes (student_name, note_text, status)
VALUES
('Mia', 'Needs help with loops in PHP.', 'open'),
('Liam', 'Completed MySQL setup successfully.', 'closed'),
('Ava', 'Understands classes but needs more method practice.', 'open'),
('Noah', 'Finished request and response notes.', 'closed'),
('Mia', 'Started working on StudentNote methods.', 'open');