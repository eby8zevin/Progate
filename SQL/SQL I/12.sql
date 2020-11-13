//e1
/* 
dibawah "FROM purchases" tambahkan code untuk
menampilkan baris dari nilai yang terbesar dikolom "price"
*/

SELECT *
FROM purchases
ORDER BY price DESC;

//e2
/*
dibawah WHERE character_name = "Ninja Ken", tambahkan code untuk
menampilkan baris dari nilai terkecil dikolom "price"
*/

SELECT *
FROM purchases
WHERE character_name = "Ninja Ken"
ORDER BY price ASC;
