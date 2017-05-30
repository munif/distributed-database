# Distributed Database

## 2016-2017
---
### EAS (Apache Cassandra dan Solr)
#### Jadwal Demo
Isi jadwal demo pada http://bit.ly/DemoFPBDT1617

#### Penilaian
Instalasi Apache Cassandra dan Solr
1. Instalasi Apache Cassandra (atau dapat menggunakan yang ada di DS310).  
2. Instalasi Apache Solr (atau dapat menggunakan yang ada di DS310).

Apache Cassandra
1. Mencari dataset untuk dimasukkan ke dalam Apache Cassandra. Untuk memasukkan data dapat menggunakan script program (PHP, Python, dsb.), atau import dalam format ke CSV. Apabila menggunakan format CSV pastikan kolom ID sudah diisi dengan UUID atau TIMEUUID.  

Apache Solr
1. Memilih tabel yang akan dijadikan indeks pencarian teks.  
2. Membuat konfigurasi schema indexing Solr.  

Aplikasi (bebas menggunakan bahasa apapun, namun gunakan konsep OOP untuk memudahkan dalam proses CRUD)
1. Membuat aplikasi CRUD dengan basis data Apache Cassandra.  
2. Pada aplikasi ada fitur searching memanfaatkan Solr (min. 2 tabel untuk diindeks oleh Apache Solr).  

#### Contoh dataset:
1. [MovieLens Dataset](https://grouplens.org/datasets/movielens/)
2. [UCI KDD Archive](http://archive.ics.uci.edu/ml/datasets.html) -> cari yang bertipe teks.

---
### Exercise → Apache Cassandra
Kerjakan course yang ada di [3] dengan judul **DS201: DataStax Enterprise Foundations of Apache Cassandra™**.

#### Referensi
[1] http://cassandra.apache.org/  
[2] http://www.guru99.com/cassandra-tutorial.html  
[3] https://academy.datastax.com/courses  

### Guest Lecture "Research in Text Mining"
Ikuti kuliah tamu "Research in Text Mining" hari ini, Kamis 27 April 2017 jam 13.00-15.00.  
#### Tugas
1. Buatlah rangkuman mengenai topik kuliah tamu tersebut dalam bentuk laporan (1-2 halaman A4).
2. Pada halaman berikutnya, tuliskan pendapat kalian mengenai beberapa pertanyaan berikut.
   1. Bagaimana mekanisme penyimpanan data dalam proses text mining skala besar? Apakah bisa menggunakan big data (Hadoop, Spark, dsb) atau basis data terdistribusi (basis data relasional)?
   2. Bagaimana basis data terdistribusi dapat membantu dalam riset text mining?
   3. Apa saja riset-riset yang sudah dicapai dalam text mining? Kira-kira riset apa yang bisa dikembangkan berdasarkan hasil-hasil riset text mining yang sudah ada saat ini?
   4. Pertanyaan-pertanyaan lain yang mungkin diajukan saat kuliah tamu berlangsung.  

**Tugas dikumpulkan dalam bentuk hardcopy saat kuliah minggu depan.**

---

### Exercise → MongoDB (2017-04-20 until 2017-05-03)
Please choose your schedule here https://goo.gl/HynkCu

---

## References
1.  M. T. Ozsu and P. Valduriez, Principles of Distributed Database Systems, Third Edition. New York: Springer, 2011.
2. S. K. Rahimi and F. S. Haug, Distributed Database Management Systems: A Practical Approach. Hoboken, New Jersey: John Wiley & Sons, Inc., 2010.

---

## Required Software
1. Oracle VirtualBox
2. MySQL, MySQL Fabric, MySQL Cluster
4. MariaDB, Galera Cluster
5. NoSQL Database (MongoDB and Cassandra)
6. [MongoDB Atlas account](https://www.mongodb.com/cloud/atlas)
