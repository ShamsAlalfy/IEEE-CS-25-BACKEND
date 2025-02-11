-- 1st Problem

SELECT NAME FROM CITY WHERE COUNTRYCODE = 'JPN';

-- 2nd Problem

SELECT ROUND(SUM(LAT_N), 2), ROUND(SUM(LONG_W), 2) FROM STATION;

-- 3rd Problem

SELECT DISTINCT
    CITY
FROM STATION
WHERE
    NOT(
        CITY LIKE 'A%'
        OR CITY LIKE 'E%'
        OR CITY LIKE 'I%'
        OR CITY LIKE 'O%'
        OR CITY LIKE 'U%'
    );

-- 4th Problem

SELECT DISTINCT
    CITY
FROM STATION
WHERE
    NOT(
        CITY LIKE '%A'
        OR CITY LIKE '%E'
        OR CITY LIKE '%I'
        OR CITY LIKE '%O'
        OR CITY LIKE '%U'
    );

-- 5th Problem

SELECT DISTINCT
    CITY
FROM STATION
WHERE
    NOT(
        CITY LIKE '%A'
        OR CITY LIKE '%E'
        OR CITY LIKE '%I'
        OR CITY LIKE '%O'
        OR CITY LIKE '%U'
        OR CITY LIKE 'A%'
        OR CITY LIKE 'E%'
        OR CITY LIKE 'I%'
        OR CITY LIKE 'O%'
        OR CITY LIKE 'U%'
    );

-- 6th Problem

SELECT ROUND(AVG(POPULATION), 0) FROM CITY;

-- 7th Problem

SELECT sender_id, COUNT(*) AS message_count
FROM messages
WHERE
    sent_date >= '2022-08-01'
    AND sent_date < '2022-09-01'
GROUP BY
    sender_id
ORDER BY message_count DESC
LIMIT 2;

-- 8th Problem

SELECT APP_ID, ROUND(
        100.0 * SUM(
            CASE
                WHEN EVENT_TYPE = 'click' THEN 1
                ELSE 0
            END
        ) / SUM(
            CASE
                WHEN EVENT_TYPE = 'impression' THEN 1
                ELSE 0
            END
        ), 2
    )
FROM EVENTS
WHERE
    TIMESTAMP >= '2022-01-01'
    AND TIMESTAMP < '2023-01-01'
GROUP BY
    APP_ID;