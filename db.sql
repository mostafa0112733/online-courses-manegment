DROP DATABASE IF EXISTS EFEA;
CREATE DATABASE EFEA;
USE EFEA;

CREATE TABLE Organizations (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    full_name VARCHAR(256) NOT NULL, 
    phone_number VARCHAR(50) NOT NULL, 
    Company_Name VARCHAR(256) NOT NULL,
    Company_Email VARCHAR(256) NOT NULL UNIQUE,
    Country VARCHAR(256) NOT NULL,
    Additional_information TEXT NOT NULL
);

CREATE TABLE Organizations_admins (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT, 
    Organizations_id INT UNSIGNED NOT NULL,
    active_date DATE,
    due_date DATE,
    password VARCHAR(256) DEFAULT 123456789,
    CONSTRAINT FOREIGN KEY (Organizations_id) REFERENCES Organizations(id) ON DELETE CASCADE ON UPDATE CASCADE
);



CREATE TABLE Persons (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(256) NOT NULL,
    email VARCHAR(256) NOT NULL UNIQUE,
    phone_number VARCHAR(50) NOT NULL,
    password VARCHAR(256) DEFAULT 123456789,
    Organizations_admins_id INT UNSIGNED ,
    user_type ENUM('website_admin', 'instructor', 'student') NOT NULL,
    CONSTRAINT FOREIGN KEY (Organizations_admins_id) REFERENCES Organizations_admins(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Courses (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(256)  NOT NULL,
    Organizations_admins_id INT UNSIGNED NOT NULL,
    CONSTRAINT FOREIGN KEY (Organizations_admins_id) REFERENCES Organizations_admins(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Courses_Instructors (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_id INT UNSIGNED NOT NULL,
    Person_id INT UNSIGNED NOT NULL,
    Organizations_admins_id INT UNSIGNED NOT NULL,
    CONSTRAINT FOREIGN KEY (course_id) REFERENCES Courses(id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (Person_id) REFERENCES Persons(id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (Organizations_admins_id) REFERENCES Organizations_admins(id) ON DELETE CASCADE ON UPDATE CASCADE
);



CREATE TABLE Course_Enrollments (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Person_id INT UNSIGNED NOT NULL,
    course_instructor_id INT UNSIGNED NOT NULL,
    Organizations_admins_id INT UNSIGNED NOT NULL,
    CONSTRAINT FOREIGN KEY (Person_id) REFERENCES Persons(id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (course_instructor_id) REFERENCES Courses_Instructors(id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (Organizations_admins_id) REFERENCES Organizations_admins(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Meetings (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    meeting_name VARCHAR(256) NOT NULL,
    course_id INT UNSIGNED NOT NULL,
    Person_id INT UNSIGNED NOT NULL,
    Schedule TIMESTAMP ,
    CONSTRAINT FOREIGN KEY (course_id) REFERENCES Courses(id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (Person_id) REFERENCES Persons(id) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE Materials (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    course_id INT UNSIGNED NOT NULL,
    Person_id INT UNSIGNED NOT NULL,
    title VARCHAR(256) NOT NULL,
    description TEXT NOT NULL,
    file_path VARCHAR(256) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT FOREIGN KEY (course_id) REFERENCES Courses(id) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (Person_id) REFERENCES Persons(id) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO `Persons`(`full_name`, `email`, `phone_number`, `password`, `user_type`)
VALUES ('Mostafa Mahmoud Abdel-Baser', 'mstafamahmoud50@hotmail.com', '01125700041', '123', 'website_admin');
