//e1
-- dapatkan total jumlah dari kolom price
SELECT SUM(price)
FROM purchases;

//e2
/*
dapatkan jumlah total dari kolom price dimana
nilai character_name adalah "Ninja Ken"
*/

SELECT SUM(price)
FROM purchases
WHERE character_name = "Ninja Ken";
