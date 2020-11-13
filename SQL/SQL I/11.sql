//e1
/*
dibawah "FROM purchases" tambahkan code untuk mengambil baris
dimana nilai kolom "category" adalah "makanan"
dan nilai kolom "character_name" adalah "Guru Domba"
*/

SELECT *
FROM purchases
WHERE category = "makanan"
AND character_name = "Guru Domba";

//e2
/*
dibawah "FROM purchases" tambahkan code untuk mengambil baris
dimana nilai kolom "category" adalah "makanan"
atau nilai kolom "character_name" adalah "Ninja Ken"
*/

SELECT *
FROM purchases
WHERE category = "makanan"
OR character_name = "Ninja Ken";
