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

## Menambahkan `.pgpass` untuk bypass password

## Script database untuk data contoh

    ```sql
    create table a(a_id int, a_name text);
    create table b(b_id int, b_desc text, a_id int);


    select master_create_distributed_table('b', 'b_id', 'hash');
    select master_create_worker_shards('b', 6, 3);

    select master_create_distributed_table('a', 'a_id', 'hash');
    select master_create_worker_shards('a', 6, 3);

    insert into a values (1, 'a1');
    insert into a values (2, 'a2');
    insert into a values (3, 'a3');

    insert into b values (1, 'b1', 1);
    insert into b values (2, 'b2', 1);
    insert into b values (3, 'b3', 2);
    ```
	