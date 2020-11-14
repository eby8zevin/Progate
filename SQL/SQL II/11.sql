//e1
/*
grup berdasarkan categori, setelah itu dapatkan total jumlah kolom price
dan kolom category untuk setiap grup
*/

SELECT SUM(price), category
FROM purchases
GROUP BY category
;

//e2
/*
buatlah sebuah grup untuk setiap karakter,
dan dapatkan total jumlah dari kolom price dan character_name 
tetapi, aggregatkan hasil hanya untuk kolom category dengan nilai "lainnya"
*/

SELECT SUM(price), character_name
FROM purchases
WHERE category = "lainnya"
GROUP BY character_name
;
