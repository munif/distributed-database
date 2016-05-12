# Instalasi PostgreSQL + Citus
## Kebutuhan aplikasi
* Ubuntu 14.04 atau 14.10
* PostgreSQL 9.5 + Citus extensions

## Konfigurasi server
* Gunakan 3-4 buah server untuk melakukan simulasi _sharding_ basis data PostgreSQL.
* Berikan nama yang unik untuk tiap server. Edit file `/etc/hostname` dari tiap server. Contoh:
    - `postgres-0`: master node
    - `postgres-1`, `postgres-2`, `postgres-3`: slave node
* Pastikan setiap komputer mengenali nama dari tiap komputer. Edit file `/etc/hosts` dan tuliskan IP dan nama tiap server.

## Tahapan instalasi
Untuk melakukan instalasi PostgreSQL+Citus, ikuti langkah-langkah yang ada di
[Multi-node setup on Ubuntu or Debian](https://www.citusdata.com/docs/citus/5.0/installation/production_deb.html).

Apabila ada kesulitan dalam mengunduh data 

## Testing
Untuk melakukan simulasi sharding pada server yang telah dibuat, ikuti tutorial [Hash Distribution](https://www.citusdata.com/docs/citus/5.0/dist_tables/hash_distribution.html).
> **Catatan**
> 
>   *  Jalankan script pada bagian _bulk insert_ pada bash shell (bukan di dalam `psql`).
>   *  Agar dapat menjalankan _command_ `copy_to_distributed_table`, lakukan `sudo` dengan menggunakan user `postgres`.
>       ```
>       sudo -i -u postgres
>       ```

## Command yang sering digunakan
### Bash
* `sudo -i -u postgres psql`: Menjalankan `psql` console.

### PSQL
* `\q`  : keluar dari psql
* `\l`  : list database
* `\dt` : list semua tabel di dalam database yang sedang terhubung
* `\c <nama database>` : connect ke &lt;nama database&gt;
