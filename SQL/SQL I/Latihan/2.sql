//exercise1.sql
-- dapatkan nilai rata-rata umur semua pengguna
SELECT AVG(age)
FROM users;

//exercise2.sql
-- dapatkan semua pengguna pria yang berumur dibawah 20 tahun
SELECT *
FROM users
WHERE age < 20 AND gender = 0;

//exercise3.sql
/* 
dapatkan jumlah total usia unik pengguna dan
kelompokan pengguna tersebut berdasarkan usia
*/

SELECT age, COUNT(*)
FROM users
GROUP BY age;
