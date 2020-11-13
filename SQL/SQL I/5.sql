//e1
/*
dibawah baris "FROM purchases" tambahkan code untuk
mendapatkan baris dengan nilai "10" dikolom "price" 
*/

SELECT *
FROM purchases
WHERE price = 10;

//e2
/*
dibawah baris "FROM purchases" tambahkan code untuk
mendapatkan baris dengan nilai "2018-10-10" dikolom "purchased_at" 
*/

SELECT *
FROM purchases
WHERE purchased_at = "2018-10-10";
