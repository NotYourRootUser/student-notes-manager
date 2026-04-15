CREATE DATABASE IF NOT EXISTS student_notes_manager;
use student_notes_manager;

CREATE TABLE student_notes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    note_text TEXT NOT NULL,
    status VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);