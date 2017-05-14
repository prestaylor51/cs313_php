/*
	TABLE     	COLUMNS
	-----		----------------------------------------------------------------------------	
	role		role_id, name, hourly, privilege	? do i need thid table, could use a Bool in user table
	user		user_id, role fk role(role_id), username, first_name, last_name
	department	department_id, name, season
	item		item_id, item_name, department fk department(department_id), quantity, price
	customer	customer_id, first_name, last_name, email, address
	purchase    purchase_id, customer, item, payment date
	
*/


DROP TABLE role, "user", department, item, customer, purchase CASCADE;

CREATE TABLE role
(role_id 		SERIAL 			PRIMARY KEY	
,name  			VARCHAR(100) 	NOT NULL UNIQUE
,hourly 		MONEY			NOT NULL
,privilege 		VARCHAR(100) 	NOT NULL
);


-- USER --
CREATE TABLE "user"
(user_id 		SERIAL 			PRIMARY KEY 
,usesrname		VARCHAR(100)	NOT NULL UNIQUE	
,password		VARCHAR(20)		NOT NULL UNIQUE
,role			INT 			REFERENCES role(role_id)
,first_name 	VARCHAR(100)	NOT NULL
,last_name  	VARCHAR(100)	NOT NULL
);


-- DEPARTMENT --
CREATE TABLE department
(department_id 	SERIAL 			PRIMARY KEY
,name 			VARCHAR(100) 	NOT NULL
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
,customer 		INT  		REFERENCES customer(customer_id)	
,item 			INT 		REFERENCES item(item_id)
,payment		MONEY		NOT NULL
,"date"  		DATE 		NOT NULL);