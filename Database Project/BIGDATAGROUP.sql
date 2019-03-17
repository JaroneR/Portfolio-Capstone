
/* Set up session settings */
SET LINESIZE 120
SET PAGESIZE 80

/* Drop all tables before creating tables */
DROP TABLE    Shipment_T        CASCADE CONSTRAINTS;
DROP TABLE    Equipment_T        CASCADE CONSTRAINTS;
DROP TABLE    Vendor_T        CASCADE CONSTRAINTS;
DROP TABLE    ClientProject_T        CASCADE CONSTRAINTS;
DROP TABLE    Client_T        CASCADE CONSTRAINTS;
DROP TABLE    JobArchive_T       CASCADE CONSTRAINTS;
DROP TABLE    JobTitle_T      CASCADE CONSTRAINTS;
DROP TABLE    Dependent_T     CASCADE CONSTRAINTS;
DROP TABLE    SalariedEmployee_T       CASCADE CONSTRAINTS;
DROP TABLE    ConsultantEmployee_T      CASCADE CONSTRAINTS;
DROP TABLE    SkillTask_T      CASCADE CONSTRAINTS;
DROP TABLE    Project_T     CASCADE CONSTRAINTS;
DROP TABLE    Department_T      CASCADE CONSTRAINTS;
DROP TABLE    Employee_T      CASCADE CONSTRAINTS;

/* Create all Database Tables (14) */
CREATE TABLE Employee_T
  (EmployeeID       NUMBER(9)   NOT NULL,
   EmployeeName     VARCHAR(40) NOT NULL,
   EmployeeAddress  VARCHAR(30),
   JobTitle         VARCHAR(40),
   DateofBirth      VARCHAR(10),
   Skills           VARCHAR(25),
   SkillsDescription   VARCHAR(40),
   EmployeeType     VARCHAR(20),
   SIN              NUMBER(9),
   EmployeeDependent  Number(2),
CONSTRAINT Employee_PK PRIMARY KEY (EmployeeID));

CREATE TABLE Department_T
  (DepartmentID     VARCHAR(25)   NOT NULL,
   Telephone        NUMBER(10)    NOT NULL,
   DepartmentLocation  VARCHAR(30),
   EmployeeID   NUMBER(9),
CONSTRAINT Department_PK PRIMARY KEY (DepartmentID),
CONSTRAINT Department_FK FOREIGN KEY (EmployeeID) REFERENCES Employee_T(EmployeeID));

CREATE TABLE Project_T
  (ProjectID        NUMBER(9)   NOT NULL,
   ProjectName      VARCHAR(40) NOT NULL,
   CostEstimation   DECIMAL(10,2),
   Equipment        VARCHAR(30),
   Tasks            VARCHAR(50),
   ProjectDueDate      VARCHAR(15),
CONSTRAINT Project_PK PRIMARY KEY (ProjectID));

CREATE TABLE SkillTask_T
  (ProjectID      NUMBER(9)   NOT NULL,
   EmployeeID     NUMBER(9)   NOT NULL,
   HoursWorked     NUMBER(3),
CONSTRAINT SkillTask_PK PRIMARY KEY (ProjectID, EmployeeID),
CONSTRAINT SkillTask_FK1 FOREIGN KEY (ProjectID) REFERENCES Project_T(ProjectID),
CONSTRAINT SkillTask_FK2 FOREIGN KEY (EmployeeID) REFERENCES Employee_T(EmployeeID));

CREATE TABLE ConsultantEmployee_T
  (EmployeeID        NUMBER(9)   NOT NULL,
   HourlyRate        NUMBER(9,2)   NOT NULL,
   ContractExpirationDate   VARCHAR(10),
CONSTRAINT ConsultantEmployee_PK PRIMARY KEY (EmployeeID),
CONSTRAINT ConsultantEmployee_FK FOREIGN KEY (EmployeeID) REFERENCES Employee_T(EmployeeID));

CREATE TABLE SalariedEmployee_T
  (EmployeeID       NUMBER(9)   NOT NULL,
   Salary           DECIMAL(9,2)   NOT NULL,
   HealthCoverage   VARCHAR(20),
   Bonus            DECIMAL(9,2),
CONSTRAINT SalariedEmployee_PK PRIMARY KEY (EmployeeID),
CONSTRAINT SalariedEmployee_FK FOREIGN KEY (EmployeeID) REFERENCES Employee_T(EmployeeID));

CREATE TABLE Dependent_T
  (DependentID       NUMBER(9)    NOT NULL,
   DependentName     VARCHAR(40)  NOT NULL,
   DependentAddress  VARCHAR(30),
   DateofBirth       VARCHAR(15),
   FamilyRelation    VARCHAR(20)  NOT NULL,
   Benefits          VARCHAR(30),
CONSTRAINT Dependent_PK PRIMARY KEY (DependentID));

CREATE TABLE JobTitle_T
  (JobID            NUMBER(9)   NOT NULL,
   JobName          VARCHAR(20),
   JobDate          VARCHAR(10),
CONSTRAINT JobTitle_PK PRIMARY KEY (JobID));

CREATE TABLE JobArchive_T
  (JobID            NUMBER(9)   NOT NULL,
   EmployeeID       NUMBER(9)   NOT NULL,
CONSTRAINT JobArchive_PK PRIMARY KEY (JobID, EmployeeID),
CONSTRAINT JobArchive_FK1 FOREIGN KEY (JobID) REFERENCES JobTitle_T(JobID),
CONSTRAINT JobArchive_FK2 FOREIGN KEY (EmployeeID) REFERENCES Employee_T(EmployeeID));

CREATE TABLE Client_T
  (ClientID         NUMBER(9)   NOT NULL, 
   Telephone        NUMBER(10)  NOT NULL,
   CompanyName      VARCHAR(40),
   Address          VARCHAR(40),
   ClientSinceDate  VARCHAR(10),
CONSTRAINT Client_PK PRIMARY KEY (ClientID));

CREATE TABLE ClientProject_T
  (ClientID         NUMBER(9)   NOT NULL,
   EmployeeID       NUMBER(9)   NOT NULL,
CONSTRAINT ClientProject_PK PRIMARY KEY (ClientID, EmployeeID),
CONSTRAINT ClientProject_FK1 FOREIGN KEY (ClientID) REFERENCES Client_T(ClientID),
CONSTRAINT ClientProject_FK2 FOREIGN KEY (EmployeeID) REFERENCES Employee_T(EmployeeID));

CREATE TABLE Vendor_T
  (VendorID         VARCHAR(9)    NOT NULL,
   Address           VARCHAR(30),
CONSTRAINT Vendor_PK PRIMARY KEY (VendorID));

CREATE TABLE Equipment_T
  (EquipmentID      VARCHAR(25)  NOT NULL,
   EquipmentCost    DECIMAL(9,2),
   Brand            VARCHAR(30),
CONSTRAINT Equipment_PK PRIMARY KEY (EquipmentID));

CREATE TABLE Shipment_T
  (VendorID       VARCHAR (9)     NOT NULL,
   EquipmentID    VARCHAR(25)     NOT NULL,
   ArrivalDate    VARCHAR(13),
   ShipmentDate   VARCHAR(20),
CONSTRAINT Shipment_PK PRIMARY KEY (VendorID, EquipmentID),
CONSTRAINT Shipment_FK1 FOREIGN KEY (VendorID) REFERENCES Vendor_T(VendorID),
CONSTRAINT Shipment_FK2 FOREIGN KEY (EquipmentID) REFERENCES Equipment_T(EquipmentID));



DESCRIBE    Shipment_T;
DESCRIBE    Equipment_T;
DESCRIBE    Vendor_T;
DESCRIBE    ClientProject_T;
DESCRIBE    Client_T;
DESCRIBE    JobArchive_T;
DESCRIBE    JobTitle_T;
DESCRIBE    Dependent_T;
DESCRIBE    SalariedEmployee_T;
DESCRIBE    ConsultantEmployee_T;
DESCRIBE    SkillTask_T;
DESCRIBE    Project_T;
DESCRIBE    Department_T;
DESCRIBE    Employee_T;

COMMIT;