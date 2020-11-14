//e1
/*
tambahkan aturan di klausa WHERE untuk mengelompokkan
baris, dimana character_name adalah "Ninja Ken"
*/

SELECT SUM(price), purchased_at
FROM purchases
WHERE character_name = "Ninja Ken"
GROUP BY purchased_at;

//e2
/*
Tambahkan klausa WHERE untuk mendapatkan baris dengan category "makanan"
setelah itu, kelompokkan hasilnya berdasarkan kolom
purchased_at dan character_name 
*/

SELECT SUM(price), purchased_at, character_name
FROM purchases
WHERE category = "makanan"
GROUP BY purchased_at, character_name;
