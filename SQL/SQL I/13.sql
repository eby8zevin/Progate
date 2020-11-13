//e1
/*
dibawah "FROM purchases" tambahkan code untuk
menampilkan maksimum 5 baris hasil
*/

SELECT *
FROM purchases
LIMIT 5;

//e2
/*
dibawah WHERE character_name = "Ninja Ken",
tambahkan code untuk menampilkan hasil maksimum 10 baris
*/

SELECT *
FROM purchases
WHERE character_name = "Ninja Ken"
LIMIT 10;
