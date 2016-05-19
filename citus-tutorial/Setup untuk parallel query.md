# Setup untuk parallel query
## Mengubah akses `postgres` menjadi berpassword
1. Jalankan `psql` sebagai user `postgres`.
    
    ```
    sudo -i -u postgres psql
    ```

2. Setelah masuk ke dalam consol `psql`, set password `postgres`. Isikan password `postgres` agar mudah diingat.
    ```
    postgres=# \password postgres
    Enter new password:
    Enter it again:
    ```

3. Quit dari `psql` console dengan mengetikkan `\q`.

## Menambahkan `.pgpass` untuk bypass password di semua node (master dan worker)
1. Login sebagai postgres
   
   ```
   sudo -i -u postgres
   ```
   
2. Create file .pgpass

   ```
   nano .pgpass
   ```
   
3. Isi .pgpass dengan format seperti berikut.

   ```
   # hostname:port:database:username:password
   *:*:*:postgres:postgres
   ```
   
   Tanda `*` berarti wildcard
4. Ubah *permission* `.pgpass` menjadi 0600.

   ```
   chomd 0600 .pgpass
   ```
   
5. Reset postgres

   ```
   sudo service postgresql restart
   ```
	

## Script database untuk data contoh

    ```
    create table a(a_id int, a_name text);
    create table b(b_id int, b_desc text, a_id int);


    select master_create_distributed_table('a', 'a_id', 'hash');
    select master_create_worker_shards('a', 6, 3);

    # Opsi 1: Repartition --> Lama
    select master_create_distributed_table('b', 'b_id', 'hash');
    select master_create_worker_shards('b', 6, 3);

    # Opsi 2: Colocated join -> relatif lebih cepat
    select master_create_distributed_table('b', 'a_id', 'hash');
    select master_create_worker_shards('b', 6, 3);

    insert into a values (1, 'a1');
    insert into a values (2, 'a2');
    insert into a values (3, 'a3');

    insert into b values (1, 'b1', 1);
    insert into b values (2, 'b2', 1);
    insert into b values (3, 'b3', 2);
    ```
	
