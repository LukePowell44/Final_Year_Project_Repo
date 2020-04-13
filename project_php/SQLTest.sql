

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
	students_allocated varchar(350),
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
VALUES ('spongebob@students.lincoln.ac.uk', 'Spongebob', 'Sqaurepants', ('test123'));

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
VALUES ('wchristian@lincoln.ac.uk', 'Wayne', 'Christian', ('test123'), 'https://staff.lincoln.ac.uk/6813ec66-c785-4a8d-9089-57bffdb7e00c', '5', 'Web_Development,Virtual_Reality_(VR),');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ, area)
VALUES ('kbachour@lincoln.ac.uk', 'Khaled', 'Bachour', ('test123'), 'https://staff.lincoln.ac.uk/d5823cb6-8053-4f12-9627-24fed0074489', '4', 'Human_Computer_Interaction_(HCI),');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ, area)
VALUES ('cheadleand@lincoln.ac.uk', 'Chris', 'Headleand', ('test123'), 'https://staff.lincoln.ac.uk/daa59075-c37c-4a18-a529-ead1acfcf512', '2', 'Augmented_Reality_(AR),Game_Development,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ, area)
VALUES ('defoster@lincoln.ac.uk', 'Derek', 'Foster', ('test123'), 'https://staff.lincoln.ac.uk/d49a8e50-b321-48b7-9c33-3ad880bd18d6', '1', 'Cloud_Computing,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, area)
VALUES ('yjames@lincoln.ac.uk', 'Yvonne', 'James', ('test123'), 'https://staff.lincoln.ac.uk/15facb94-850f-494b-ba54-16dfef98c97d', 'Networking,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, area)
VALUES ('pcarlisle@lincoln.ac.uk', 'Philip', 'Carlisle', ('test123'), 'https://staff.lincoln.ac.uk/0e452623-423b-41f4-a9db-9dcc833131cc', 'Game_Development,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ, area)
VALUES ('jholopainen@lincoln.ac.uk', 'Jussi', 'Holopainen', ('test123'), 'https://staff.lincoln.ac.uk/34c98bf4-8fea-411f-94e0-e11b6305487e', '5', 'Game_Development,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, area)
VALUES ('sjiang@lincoln.ac.uk', 'Shouyong', 'Jiang', ('test123'), 'https://staff.lincoln.ac.uk/26b8d88a-9e1c-46e0-b3bb-9b45b4142daa', 'Machine_Learning,Big_Data,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, area)
VALUES ('myu@lincoln.ac.uk', 'Miao', 'Yu', ('test123'), 'https://staff.lincoln.ac.uk/36813a8e-0142-4342-9c17-f534a0a16cdd', 'Computer_Learning,Machine_Learning,Deep_Learning,');

INSERT INTO Staff_user (Email, forename, surname, Password, directory)
VALUES ('baldiri@lincoln.ac.uk', 'Bashir', 'Al-Diri', ('test123'), 'https://staff.lincoln.ac.uk/51763eb1-19eb-42b0-9781-c99ce9133b85');

INSERT INTO Staff_user (Email, forename, surname, Password, directory, FREQ)
VALUES ('kjacques@lincoln.ac.uk', 'Kevin', 'Jacques', ('test123'), 'https://staff.lincoln.ac.uk/24c4fa4e-e572-4f3d-a77a-fa5631ca951a', '3');

INSERT INTO Staff_user (Email, forename, surname, Password, directory)
VALUES ('hcuayahuitl@lincoln.ac.uk', 'Heriberto', 'Cuayahuitl', ('test123'), 'https://staff.lincoln.ac.uk/6832ced4-f983-44ca-8bc7-36cde054bf0b');