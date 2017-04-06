# Database Partition

## Mengecek Plugin Partition
1. Login ke dalam MySQL atau MariaDB *console*.
2. Cek plugin yang terinstal dengan menggunakan perintah berikut.
    ```
    SHOW PLUGINS;
    ```
    Output dari perintah tersebut harusnya mengandung baris berikut.  

| Name                          | Status   | Type               | Library | License |
|-------------------------------|----------|--------------------|---------|---------|
| ...                           | ...      | ...                | ...     | ...     |
| partition                     | **ACTIVE**   | STORAGE ENGINE     | NULL    | GPL     |
| ...                           | ...      |...                 | ...     | ...     |

---
## Menginstal Basis Data Contoh
Unduh dan ikuti petunjuk *import* basis data `Employee` dari [sini](https://dev.mysql.com/doc/employee/en/employees-installation.html).

---
## Referensi
1. [Partitioning](https://dev.mysql.com/doc/refman/5.7/en/partitioning.html)
2. [ALTER TABLE Partition Operations](https://dev.mysql.com/doc/refman/5.7/en/alter-table-partition-operations.html)