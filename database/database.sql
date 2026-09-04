CREATE DATABASE IF NOT EXISTS masjid_donasi;
USE masjid_donasi;

CREATE TABLE IF NOT EXISTS donors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(50),
    address TEXT,
    profile_photo VARCHAR(255) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO donors (name, email, phone, address) VALUES 
('Ahmad Fauzan', 'ahmad@email.com', '0812-3456-7890', 'Jl. Sudirman No. 123, Jakarta');
