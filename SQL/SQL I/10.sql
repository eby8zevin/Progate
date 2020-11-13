//e1
/*
dibawah "FROM purchases" tambahkan code untuk mengambil baris
dimana kolom  "price" adalah NULL
*/

SELECT *
FROM purchases
WHERE price IS NULL;

//e2
/*
dibawah "FROM purchases" tambahkan code untuk mengambil baris
dimana kolom "price" adalah NOT NULL
*/

SELECT *
FROM purchases
WHERE price IS NOT NULL;
