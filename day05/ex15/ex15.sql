SELECT REVERSE(STUFF(phone_number, 1, 1, '') AS `rebmunenohp`
FROM distrib
WHERE phone_number LIKE '05%';
