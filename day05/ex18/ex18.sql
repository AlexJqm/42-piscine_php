SELECT name
FROM distrib
WHERE id_distrib IN (42, 71, 88, 89, 90) AND id_distrib BETWEEN 62 AND 69
OR name LIKE "%[yY]%[yY]%"
LIMIT 2, 5;
