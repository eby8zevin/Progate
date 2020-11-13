//e1
/*
dibawah "FROM purchases" tambahkan code untuk mendapatkan semua baris dimana
kolom "character_name" tidak mengandung kata "Ninja Ken"
*/

SELECT *
FROM purchases
WHERE NOT character_name = "Ninja Ken";

//e2
/*
dibawah "FROM purchases" tambahkan code untuk mendapatkan semua baris dimana
kolom "name" tidak mengandung kata "puding"
*/

SELECT *
FROM purchases
WHERE NOT name LIKE "%puding%";
