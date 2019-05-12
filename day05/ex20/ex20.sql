SELECT genre.id_genre AS `id genre`, genre.name AS `name genre`, distrib.id_distrib AS `id distrib`, distrib.name AS `name distrib`, film.title AS `title film`
FROM film
INNER JOIN genre
ON film.id_genre = genre.id_genre
INNER JOIN distrib
ON film.id_distrib = distrib.id_distrib
WHERE film.id_genre BETWEEN 4 AND 8;
