

CREATE TABLE student_user (
    Student_ID int AUTO_INCREMENT,
    email varchar(350),
	forename varchar(350),
	surname varchar(350),
    password varchar(350),
	cho1 int(255) NULL DEFAULT '0',
	cho2 int(255) NULL DEFAULT '0',
	cho3 int(255) NULL DEFAULT '0',
	supervisor_allocated int(255),
	PRIMARY KEY (Student_ID)
);

CREATE TABLE Staff_user (
    Staff_ID int AUTO_INCREMENT,
	email varchar(350),
	forename varchar(350),
	surname varchar(350),
    password varchar(350),
	area varchar(350),
	FREQ int(255) NULL DEFAULT '0',
	directory varchar(350),
	PRIMARY KEY (Staff_ID)
);

CREATE TABLE course_area (
	area_id int AUTO_INCREMENT,
	area varchar(350),
	PRIMARY KEY (area_id)
);

INSERT INTO course_area (area)
VALUES ('Robotics');

INSERT INTO course_area (area)
VALUES ('Networking');

INSERT INTO course_area (area)
VALUES ('Human Computer Interaction (HCI)');

INSERT INTO course_area (area)
VALUES ('Cloud Computing');

INSERT INTO course_area (area)
VALUES ('Web Development');

INSERT INTO course_area (area)
VALUES ('Virtual Reality (VR)');

INSERT INTO course_area (area)
VALUES ('Augmented Reality (AR)');

INSERT INTO course_area (area)
VALUES ('Games Development');

INSERT INTO course_area (area)
VALUES ('Computer Learning');

INSERT INTO course_area (area)
VALUES ('Machine Learning');

INSERT INTO course_area (area)
VALUES ('Deep Learning');

INSERT INTO course_area (area)
VALUES ('Artificial Intelligence (AI)');

INSERT INTO course_area (area)
VALUES ('Embedded Systems');

INSERT INTO course_area (area)
VALUES ('Data Science');

INSERT INTO course_area (area)
VALUES ('Computer Vision');

INSERT INTO course_area (area)
VALUES ('Image Processing');

INSERT INTO course_area (area)
VALUES ('Cross Platform Development');

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('potter@students.lincoln.ac.uk', 'Harry', 'Potter', ('test123'));

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('spongebob@students.lincoln.ac.uk', 'Spongebob', 'Squarepants', ('test123'));

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('bloggs@students.lincoln.ac.uk', 'Joe', 'Bloggs', ('test123'));

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('star@students.lincoln.ac.uk', 'Patrick', 'Star', ('test123'));

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('tennant@students.lincoln.ac.uk', 'David', 'Tennant', ('test123'));

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('mitchell@students.lincoln.ac.uk', 'Phillip', 'Mitchell', ('test123'));

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('partridge@students.lincoln.ac.uk', 'Alan', 'Partridge', ('test123'));

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('gerrard@students.lincoln.ac.uk', 'Steven', 'Gerrard', ('test123'));

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('skywalker@students.lincoln.ac.uk', 'Luke', 'Skywalker', ('test123'));

INSERT INTO Student_User (Email, forename, surname, Password)
VALUES ('stark@students.lincoln.ac.uk', 'Tony', 'Stark', ('test123'));

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ, area)
VALUES ('bbunny@lincoln.ac.uk', 'Buggs', 'Bunny', ('test123'), 'https://staff.lincoln.ac.uk/', '5', 'Web_Development,Virtual_Reality_(VR),');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ, area)
VALUES ('dduck@lincoln.ac.uk', 'Daffy', 'Duck', ('test123'), 'https://staff.lincoln.ac.uk/', '4', 'Human_Computer_Interaction_(HCI),');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ, area)
VALUES ('tbird@lincoln.ac.uk', 'Tweety', 'Bird', ('test123'), 'https://staff.lincoln.ac.uk/', '2', 'Augmented_Reality_(AR),Game_Development,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ, area)
VALUES ('mmouse@lincoln.ac.uk', 'Mickey', 'Mouse', ('test123'), 'https://staff.lincoln.ac.uk/', '1', 'Cloud_Computing,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, area)
VALUES ('donduck@lincoln.ac.uk', 'Donald', 'Duck', ('test123'), 'https://staff.lincoln.ac.uk/', 'Networking,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, area)
VALUES ('pdog@lincoln.ac.uk', 'Pluto', 'Dog', ('test123'), 'https://staff.lincoln.ac.uk/', 'Game_Development,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ, area)
VALUES ('tcat@lincoln.ac.uk', 'Tom', 'Cat', ('test123'), 'https://staff.lincoln.ac.uk/', '5', 'Game_Development,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, area)
VALUES ('sdoo@lincoln.ac.uk', 'Scooby', 'Doo', ('test123'), 'https://staff.lincoln.ac.uk/', 'Machine_Learning,Big_Data,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, area)
VALUES ('fflintstone@lincoln.ac.uk', 'Fred', 'Flintstone', ('test123'), 'https://staff.lincoln.ac.uk/', 'Computer_Learning,Machine_Learning,Deep_Learning,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory)
VALUES ('gramsey@lincoln.ac.uk', 'Gordon', 'Ramsey', ('test123'), 'https://staff.lincoln.ac.uk/');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ)
VALUES ('joliver@lincoln.ac.uk', 'Jamie', 'Oliver', ('test123'), 'https://staff.lincoln.ac.uk/', '3');

INSERT INTO Staff_user (Email, forename, surname, Password, directory)
VALUES ('phollywood@lincoln.ac.uk', 'Paul', 'Hollywood', ('test123'), 'https://staff.lincoln.ac.uk/');

INSERT INTO Staff_user (Email, forename, surname, Password, directory)
VALUES ('hcuayahuitl@lincoln.ac.uk', 'Heriberto', 'Cuayahuitl', ('test123'), 'https://staff.lincoln.ac.uk/6832ced4-f983-44ca-8bc7-36cde054bf0b');