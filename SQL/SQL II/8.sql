//e1
-- dapatkan total harga purchases berdasarkan purchased_at dan character_name
SELECT SUM(price), purchased_at, character_name 
FROM purchases
GROUP BY purchased_at, character_name;

//e2
/*
dapatkan total berapa kali purchases terjadi berdasarkan
purchased_at and character_name
*/

SELECT COUNT(*), purchased_at, character_name 
FROM purchases
GROUP BY purchased_at, character_name;
