## 1. What is the Database and Why Does It Exist?
A **database** is an organized collection of data that is stored and accessed electronically based on the use of a **(DBMS) Database Management System)**.

Databases are designed to manage large amounts of information efficiently, enabling easy retrieval, insertion, updating, and deletion of data.

**Why does it exist?**  
- To store data in an organized way.  
- To enable fast and efficient data retrieval.  
- To support data integrity and security.  
- To allow multiple users to access data simultaneously.

[Reference](https://en.wikipedia.org/wiki/Database)


---

## 2. What is SQL?
**SQL (Structured Query Language)** is a standard programming language used to manage and manipulate relational databases. It allows users to:
- Retrieve data from a database.
- Create and modify database structures (tables, views, etc.).
- Insert, update, delete, and retrieve data.
- Control access to data through permissions.

[Reference](https://www.w3schools.com/sql/sql_intro.asp)

---

## 3. What Are the 5 Most Famous Databases in the World Now and Why?
1. **Oracle Database** - Highly robust with advanced features for large-scale enterprise applications.
2. **MySQL** - Widely used for web applications, open-source, and highly reliable.**MySQL** - Widely used for web applications, open-source, and highly reliable.
3. **Microsoft SQL Server** - Preferred in enterprise environments for strong integration with Microsoft products.
4. **PostgreSQL** - Known for advanced features, strong performance, and extensibility.
5. **MongoDB** - A NoSQL database designed for scalability and flexibility with unstructured data.

[Reference](https://db-engines.com/en/ranking)

---

## 4. What is RDBMS?

An **RDBMS (relational database management system)** is a collection of programs and capabilities that enable IT teams and others to `create` , 
`update` , `admister` and otherwise interact with relational database.

[Reference](https://www.techtarget.com/searchdatamanagement/definition/RDBMS-relational-database-management-system)

---

## 5. RDBMS VS DBMS

`Definition`

**DBMS** :  A software program that not only stores databases but also maintains and manages them and controls access to them. Data is stored as files. 

**RDBMS** : An advanced form of a DBMS. Data is organised in tables to interpret relations and differences. 

`Examples`

**DBMS**  
- Windows registry
- Microsoft Access
- MongoDB
- XML

**RDBMS** 
- SQL
- MySQL
- Postgres
- Oracle

`Characteristics`

***DBMS***

1. **Multithreading:** Error-free simultaneous usage of multiple databases

2. **Security:** Secures the database with limited access to users according to the requirements

3. **Efficiency:** Strong query language

4. **Preservation:** Backup and recovery

5. **Integrity:** Better quality and reliability due to data integrity 

6. **Self-explaining nature:** Self-definition of data

7. **Versatility:** Takes up any datatype

8. **ACID (atomicity, consistency, isolation, durability) compliant:** Adheres to crucial database properties of atomicity, consistency, isolation, and durability

***RDBMS***

1. **Accuracy:** Eliminates erroneous data duplication since data is stored only once

2. **Categorisation:** Data is easily categorised to filter and extract efficiently

3. **SQL efficiency:** SQL facilitates complex queries

4. **Security:** Permissions prevent unauthorised access

5. **Flexibility:** Data is automatically updated throughout the system when a change is made

6. **Automation:** Stored procedures eliminate the need for constant coding

7. **ACID compliant:** Adheres to crucial database properties of atomicity, consistency, isolation, and durability

[Reference](https://www.coursera.org/in/articles/difference-between-dbms-and-rdbms)

---

## 6. Naming conventions

A **naming conventions** is a convention (generally agreed scheme) for naming things. Conventions differ in their intents, which may include to:

- Allow useful information to be deduced from the names based on regularities.

- Show relationships, and in most personal naming conventions

- Ensure that each name is unique for same scope

[Reference](https://en.wikipedia.org/wiki/Naming_convention)

---

## 7. Primary keys VS Unique keys

**Primay Key** 
- Uniquely identifies each record in the table.
- Cannot store NULL values.

**Unique Keys** 
- Serves as a unique identifier for records when a primary key is absent.
- Can store a null value, but only one NULL value is allowed. 

[Reference](https://testbook.com/key-differences/difference-between-primary-key-and-unique-key)

---

## 8. MySQL Constraints
 
**SQL constraints** are used to specify rules for the data in a table.

**Constraints** are used to limit the type of data that can go into a table. This ensures the accuracy and reliability of the data in the table. If there is any violation between the constraint and the data action, the action is aborted.

**Constraints** can be column level or table level. Column level constraints apply to a column, and table level constraints apply to the whole table.

**Constraints are commonly used in SQL:**
- `NOT NULL` - Ensures that a column cannot have a NULL value.
- `UNIQUE` - Ensures that all values in a column are different.
- `PRIMARY KEY` - A combination of a `NOT NULL` and `UNIQUE`. Uniquely identifies each row in a table.
- `FOREIGN KEY` - Prevents actions that would destroy links between tables.
- `CHECK` - Ensures that the values in a column satisfies a specific condition.
- `DEFAULT` - Sets a default value for a column if no value is specified.
- `CREATE INDEX` - Used to create and retrieve data from the database very quickly.

[Reference](https://www.w3schools.com/mysql/mysql_constraints.asp)

---

## 9. MySQL Indexing 

The `CREATE INDEX` statement is used to create indexes in tables.

Indexes are used to retrieve data from the database more quickly than otherwise.

**CREATE INDEX Syntax**
``` MySQL
CREATE INDEX index_name
ON table_name (column1, column2, ...);
```
**CREATE UNIQUE INDEX Syntax**
``` MySQL
CREATE UNIQUE INDEX index_name
ON table_name (column1, column2, ...);
```
**DROP INDEX Syntax**
``` MySQL
ALTER TABLE table_name
DROP INDEX index_name;
```
[Reference](https://www.w3schools.com/mysql/mysql_create_index.asp)

---

## 10. Difference between MySQL and Postgresql

**MySQL** is a relational database management system that lets you store data as tables with rows and columns. It’s a popular system that powers many web applications, dynamic websites, and embedded systems.

**PostgreSQL** is an object-relational database management system that offers more features than MySQL. It gives you more flexibility in data types, scalability, concurrency, and data integrity.

[Reference](https://aws.amazon.com/compare/the-difference-between-mysql-vs-postgresql/)

---

## 11. Relations (one to one, one to many, many to many).

- **One To One :**  A record in one table is related to one record in another table.
- **One To Many :** A record in one table is related to many records in another table.
- **Many To Many :** Multiple records in one table are related to multiple records in another table.

[Reference](https://dzone.com/articles/how-to-handle-a-many-to-many-relationship-in-datab)

---

## 12. Write-Ahead Logging

**Write-Ahead Logging (WAL)** is a standard method for ensuring data integrity.

 A detailed description can be found in most books about transaction processing. 
 
 Briefly, WAL's central concept is that changes to data files must be written only after those changes have been logged, that is, after WAL records describing the changes have been flushed to permanent storage. 
 
 If we follow this procedure, we do not need to flush data pages to disk on every transaction commit, because we know that in the event of a crash we will be able to recover the database using the log: any changes that have not been applied to the data pages can be redone from the WAL records.

 [Reference](https://www.postgresql.org/docs/current/wal-intro.html)

 ---

 ## 13. What are Normalization and Denormalization?

 **Normalization** is used to remove redundant data from the database and to store non-redundant and consistent data into it. It is a process of converting an unnormalized table into a normalized table. Database normalization is an important process because a poorly designed database table is inconsistent and may create issues while performing operations like insertion, deletion, updating, etc.

The process of Normalization involves resolution of database anomalies, elimination of data redundancy, data dependency, isolation of data, and data consistency. Normalization in databases provides a formal framework to analyze the relations based on the key attributes and their functional dependencies. It reduces the requirements of restructuring of tables.


**Denormalization** is used to combine multiple table data into one so that it can be queried quickly. It is a process of storing the join of higher normal form relations in the form of base relation that is in a lower normal form. The primary goal of denormalization is to achieve the faster execution of the queries.

In the process of denormalization, the data is integrated into the same database. Denormalization is mainly used where joins are expensive and queries are executed on the table very frequently. However, there is a drawback of denormalization, that is, a small wastage of memory.

[Reference](https://www.tutorialspoint.com/difference-between-normalization-and-denormalization)


