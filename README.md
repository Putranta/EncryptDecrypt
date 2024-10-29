# Aplikasi Encrypt Decrypt 🔒

Aplikasi Laravel untuk mengenkripsi dan mendekripsi teks menggunakan algoritma **MD5**, **AES**, **Bcrypt**, **SHA**, dan **Base64**. Aplikasi ini menyediakan antarmuka yang sederhana untuk menunjukkan dasar-dasar enkripsi di PHP.

## Fitur ✨

-   **AES dan Base64 Encryption/Decryption**: Enkripsi menggunakan AES-256-CBC dan encoding Base64 untuk kompatibilitas data.
-   **Copy & Reset**: Tombol untuk mengosongkan input dan menyalin teks terenkripsi dengan mudah.
-   **Desain Responsif**: Dibangun dengan Tailwind CSS, antarmuka mendukung tampilan mobile.

## Tampilan Antarmuka

![Tampilan Antarmuka Aplikasi](public/image.png)

## Instalasi 🚀

1. **Clone repository**

    ```bash
    git clone https://github.com/Putranta/EncryptDecrypt
    cd EncryptDecrypt
    ```

2. **Install dependencies**

    ```bash
    composer install
    npm install && npm run dev
    ```

3. **Atur variabel lingkungan**
   Salin `.env.example` menjadi `.env` dan perbarui nilainya:

    ```plaintext
    APP_KEY=base64:generatedAppKey
    ```

    Lalu, buat application key:

    ```bash
    php artisan key:generate
    ```

4. **Jalankan server**
    ```bash
    php artisan serve
    ```

## Cara Menggunakan 📝

1. **Buka aplikasi**: Kunjungi `http://localhost:8000` di browser.
2. **Masukkan Teks**: Tulis teks yang ingin Anda enkripsi atau dekripsi.
3. **Pilih Metode**: Tentukan metode enkripsi yang diinginkan (AES atau Base64).
4. **Encrypt / Decrypt**:
    - Klik **Encrypt** untuk mengenkripsi teks.
    - Klik **Decrypt** untuk mendekripsi teks kembali ke bentuk aslinya.
5. **Copy & Reset**:
    - Gunakan tombol **Copy** untuk menyimpan teks terenkripsi ke clipboard.
    - Gunakan tombol **Refresh** untuk mengosongkan semua field.

## Contoh Enkripsi AES & Base64

```plaintext
Input: Hello World
Terenkripsi (Base64): U2FsdGVkX1+KVRlcYxT2zg==
Didekripsi: Hello World
```

## Persyaratan 🛠️

-   PHP >= 7.4
-   Laravel >= 9.x
-   Ekstensi PHP OpenSSL
-   Composer
-   Node.js dan npm

## Lisensi 📄

Proyek ini open-source dan tersedia di bawah [Lisensi MIT](https://opensource.org/licenses/MIT).
