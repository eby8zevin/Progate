//exercise1.sql
-- Jalankan code untuk menampilkan kolom character_name dengan duplikasi
SELECT character_name
FROM purchases;

//exercise2.sql
-- dapatkan baris dari kolom character_name dengan duplikat dihilangkan
SELECT DISTINCT(character_name)
FROM purchases;

//exercise3.sql
-- dapatkan baris dari kolom name tanpa duplikat
SELECT DISTINCT(name)
FROM purchases;
