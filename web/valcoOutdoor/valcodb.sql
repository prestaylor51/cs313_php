/*
	TABLE     	COLUMNS
	-----		----------------------------------------------------------------------------	
	role		role_id, name, hourly, privilege	? do i need thid table, could use a Bool in user table
	employee 	employee_id, role fk role(role_id), username, first_name, last_name
	department	department_id, name, season
	item		item_id, item_name, department fk department(department_id), quantity, price
	customer	customer_id, first_name, last_name, email, address
	purchase    purchase_id, customer, item, payment date
	
*/


DROP TABLE employee, department, item, customer, purchase CASCADE;


-- EMPLOYEE --
CREATE TABLE employee
(employee_id 		SERIAL 			PRIMARY KEY 
,username		VARCHAR(100)	NOT NULL UNIQUE	
,password		VARCHAR(20)		NOT NULL UNIQUE
,first_name 	VARCHAR(100)	NOT NULL
,last_name  	VARCHAR(100)	NOT NULL
,isadmin			INT 			NOT NULL
);


-- DEPARTMENT --
CREATE TABLE department
(department_id 	SERIAL 			PRIMARY KEY
,name 			VARCHAR(100) 	NOT NULL UNIQUE
);


-- ITEM --
CREATE TABLE item
(item_id 		SERIAL 			PRIMARY KEY	
,item_name 		VARCHAR(100) 	NOT NULL UNIQUE
,department 	INT 			NOT NULL REFERENCES department(department_id)
,quantity		INT 			NOT NULL
,price 			MONEY 			NOT NULL);


-- CUSTOMER --
CREATE TABLE customer
(customer_id 	SERIAL 			PRIMARY KEY	
,first_name 	VARCHAR(100)	NOT NULL
,last_name 		VARCHAR(100) 	NOT NULL
,email 			VARCHAR(100) 	
,address 		VARCHAR(256)
);


-- PURCHASE --
CREATE TABLE purchase
(purchase_id 	SERIAL 		PRIMARY KEY
,customer 		INT  		NOT NULL REFERENCES customer(customer_id)	
,item 			INT 		NOT NULL REFERENCES item(item_id)
,payment		MONEY		NOT NULL
,"date"  		DATE 		NOT NULL);


-- INSERT EMPLOYEE--
INSERT INTO employee
(username, password, first_name, last_name, isadmin)
VALUES
('pdawg', 'pdawgtheman', 'Preston','Taylor',1),
('bossman','12345', 'Val', 'Taylor', 1),
('wschmit','54321','Winston','Schmit',0);


-- INSERT CUSTOMER --
INSERT INTO customer
(first_name, last_name, email, address)
VALUES
('Peter', 'Frampton', 'pframp456@gmail.com','123 W 6th St Jonesville, CA 45678' ),
('Fanny','Jones','fjones@gmail.com','345 S 4th AVE Yuma, AZ 85364');


-- INSERT INTO DEPARTMENT --
INSERT INTO department
(name)
VALUES
('Knives'),
('Holsters'),
('Reloading');

-- INSERT ITEM --
INSERT INTO item
(item_name, department, quantity, price)
VALUES
('Scandi Ground Bushcrafter', 1, 10, 50.00),
('1911 Leather Holster',2,5,70.00),
('50 Case 30-06 155gr Sierra GK',3,5,60.00);

-- INSERT INTO PURCHASE --

INSERT INTO purchase
(customer, item, payment, "date") 
VALUES
(1, 1, 50.00, '10 May 2017'),
(2,2,70.00,'18 May 2017'),
(1,3,60.00,'18 May 2017');


-- SELECT STATEMENT --
SELECT * FROM purchase AS p 
	JOIN customer as c 
	on p.customer = 1;