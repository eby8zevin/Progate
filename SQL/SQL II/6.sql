//e1
-- dapatkan harga tertinggi di kolom price
SELECT MAX(price)
FROM purchases;

//e2
-- dapatkan harga terendah dikolom price
SELECT MIN(price)
FROM purchases;

//e3
/*
untuk baris dimana nilai character_name adalah "Ninja Ken"
dapatkan harga tertinggi dari semua nilai dikolom price
*/

SELECT MAX(price)
FROM purchases
WHERE character_name = "Ninja Ken";
