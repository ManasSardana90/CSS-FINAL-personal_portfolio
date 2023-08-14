USE Manas200542367;

CREATE TABLE contact_form_entries (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submission_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

SELECT * FROM contact_form_entries;