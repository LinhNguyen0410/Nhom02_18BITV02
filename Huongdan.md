# Nhom02_18BITV02
+ Bước 1: Chuyển qua thư mục muốn clone code về
+ Bước 2: Clone source về: git clone <https://github.com/LinhNguyen0410/Nhom02_18BITV02> và di chuyển vào thư mục vừa clone
+ Bước 3: Install các dependency và library cần thiết bằng composer
composer update hoặc composer install
+ Bước 4: Cấu hình Laravel framework
+ 4.1: tạo file .env (copy từ file .env.example)
+ 4.2: tạo key bằng lệnh php artisan key:generate
+ 4.3: reset thông tin cấu hình trong cache của framework bằng lệnh: php artisan config:cache
+ Bước 5: Start gói Xampp bật dịch vụ MySQL và Apache,truy cập http://localhost/phpmyadmin/ import file db_banhangg nằm trong thư mục database.
+ Bước 6: Start Laravel Server bằng lệnh Php artisan serve.
