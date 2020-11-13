//e1
/*
dibawah "FROM purchases" tambahkan code untuk
mengambil baris dengan nilai "10" atau lebih dari kolom "price" 
*/

SELECT *
FROM purchases
WHERE price >= 10;

//e2
/*
dibawah "FROM purchases" tambahkan code untuk mengambil baris dengan
nilai tanggal "2018-11-01" dan sebelumnya dari kolom "purchased_at"
*/

SELECT *
FROM purchases
WHERE purchased_at <= "2018-11-01";
