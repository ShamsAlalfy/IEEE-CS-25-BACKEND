-- 1st Problem

SELECT * 
FROM CITY
WHERE POPULATION > 100000 and COUNTRYCODE = 'USA';

-- 2nd Problem

SELECT NAME
FROM CITY
WHERE POPULATION > 120000 and COUNTRYCODE = 'USA';

-- 3rd Problem

SELECT * 
FROM CITY
WHERE COUNTRYCODE = 'JPN';

-- 4th Problem

SELECT NAME 
FROM EMPLOYEE
ORDER BY NAME ASC;

-- 5th Prooblem

SELECT NAME
FROM EMPLOYEE
WHERE SALARY > 2000 AND MONTHS < 10
ORDER BY EMPLOYEE_ID ASC;

-- 6th Problem

SELECT NAME 
FROM STUDENTS
WHERE MARKS > 75
ORDER BY SUBSTRING(NAME,CHAR_LENGTH(NAME)-2) ASC , ID ASC;

-- 7th Problem

SELECT PART , ASSEMBLY_STEP
FROM PARTS_ASSEMBLY
WHERE FINISH_DATE IS NULL;