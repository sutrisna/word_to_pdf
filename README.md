# Convert word to pdf using PHP & LibreOffice
Baru di uji coba di windows dengan file docx.

### Dependencies
Sebelumnya install [LibreOffice](http://www.libreoffice.org/).

### Installation
1. Setup `soffice` di environment `for windows os`
2. Jalan kan composer :
```bash
$ composer install
```
3. Upload file docx ke folder `files`
4. Hasil convert ada di folder `output`

### Usage
Run Service
```bash
php -S localhost:8080
```
Example
```bash
http://localhost:8080?file=[file_name]&type=[file_extension]
```

### Requirements
- PHP 8.0
- File extension `docx`
