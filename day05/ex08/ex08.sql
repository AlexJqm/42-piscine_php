SELECT last_name, first_name, CONVERT(birthdate, GETDATE()) AS `birthdate`
FROM user_card
WHERE YEAR(birthdate) LIKE "%1989%"
ORDER BY last_name ASC;
