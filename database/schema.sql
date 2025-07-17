-- Create Database
CREATE DATABASE IF NOT EXISTS clinic_db;
USE clinic_db;

-- Users Table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'doctor', 'receptionist') NOT NULL
);

-- Patients Table
CREATE TABLE IF NOT EXISTS patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    gender ENUM('Male', 'Female', 'Other'),
    contact VARCHAR(15),
    address TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Appointments Table
CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    patient_id INT,
    doctor_name VARCHAR(100),
    appointment_date DATE,
    status ENUM('Scheduled', 'Completed', 'Cancelled') DEFAULT 'Scheduled',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (patient_id) REFERENCES patients(id) ON DELETE CASCADE
);

-- Checkups Table
CREATE TABLE IF NOT EXISTS checkups (
    id INT AUTO_INCREMENT PRIMARY KEY,
    appointment_id INT,
    symptoms TEXT,
    diagnosis TEXT,
    notes TEXT,
    checkup_date DATE,
    FOREIGN KEY (appointment_id) REFERENCES appointments(id) ON DELETE CASCADE
);

-- Prescriptions Table
CREATE TABLE IF NOT EXISTS prescriptions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    checkup_id INT,
    medicine_name VARCHAR(100),
    dosage VARCHAR(100),
    duration VARCHAR(100),
    FOREIGN KEY (checkup_id) REFERENCES checkups(id) ON DELETE CASCADE
);

-- Medicines Table
CREATE TABLE IF NOT EXISTS medicines (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    type VARCHAR(50),
    stock INT,
    price DECIMAL(10,2)
);

-- Billing Table
CREATE TABLE IF NOT EXISTS billing (
    id INT AUTO_INCREMENT PRIMARY KEY,
    appointment_id INT,
    consultation_fee DECIMAL(10,2),
    medicine_cost DECIMAL(10,2),
    total DECIMAL(10,2),
    billing_date DATE,
    FOREIGN KEY (appointment_id) REFERENCES appointments(id) ON DELETE CASCADE
);

-- Reports Table
CREATE TABLE IF NOT EXISTS reports (
    id INT AUTO_INCREMENT PRIMARY KEY,
    checkup_id INT,
    report_name VARCHAR(100),
    file_path VARCHAR(255),
    upload_date DATE,
    FOREIGN KEY (checkup_id) REFERENCES checkups(id) ON DELETE CASCADE
);
