# CICT OJ - Hệ thống chấm bài thuật toán tự động

OJ này được fork và chỉnh sửa lại từ NOJ. Chi tiết có thể xem qua repo gốc ở đây: [NOJ](https://github.com/ZsgsDesign/NOJ). Đây là OJ chính thức của CLB Tin học - khoa CNTT&TT trường ĐH Cần Thơ.

![Scrutinizer build (GitHub/Bitbucket)](https://img.shields.io/scrutinizer/build/g/lvdat/NOJ/master?label=Scrutinizer%20%5Bmaster%5D&logo=scrutinizer&style=flat-square)
![GitHub Workflow Status (branch)](https://img.shields.io/github/workflow/status/lvdat/NOJ/Test%20Build/master?label=Github%20CI%20%5Bmaster%5D&logo=github&style=flat-square)
![GitHub Workflow Status (branch2)](https://img.shields.io/github/workflow/status/lvdat/NOJ/Test%20Build/beta?label=Github%20CI%20%5Bbeta%5D&logo=github&style=flat-square)
![GitHub repo size](https://img.shields.io/github/repo-size/lvdat/NOJ.svg?style=flat-square)
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Flvdat%2FNOJ.svg?type=shield)](https://app.fossa.com/projects/git%2Bgithub.com%2Flvdat%2FNOJ?ref=badge_shield)

<details>
  <summary>Ngôn ngữ hỗ trợ (15)</summary>

|Language|Compile/Run Command|
|--------|-------------------|
|C|/usr/bin/gcc -DONLINE_JUDGE -O2 -w -fmax-errors=3 -std=c99 {src_path} -lm -o {exe_path}|
|C11|/usr/bin/gcc -DONLINE_JUDGE -O2 -w -fmax-errors=3 -std=c11 {src_path} -lm -o {exe_path}|
|C++|/usr/bin/g++ -DONLINE_JUDGE -O2 -w -fmax-errors=3 -std=c++11 {src_path} -lm -o {exe_path}|
|C++14|/usr/bin/g++ -DONLINE_JUDGE -O2 -w -fmax-errors=3 -std=c++14 {src_path} -lm -o {exe_path}|
|C++17|/usr/bin/g++ -DONLINE_JUDGE -O2 -w -fmax-errors=3 -std=c++17 {src_path} -lm -o {exe_path}|
|Java|/usr/bin/javac {src_path} -d {exe_dir} -encoding UTF8<br>/usr/bin/java -cp {exe_dir} -XX:MaxRAM={max_memory}k -Djava.security.manager -Dfile.encoding=UTF-8 -Djava.security.policy==/etc/java_policy -Djava.awt.headless=true Main|
|Python2|/usr/bin/python -m py_compile {src_path}<br>/usr/bin/python {exe_path}|
|Python3|/usr/bin/python3.7 -m py_compile {src_path}<br>/usr/bin/python3.7 {exe_path}|
|PHP7|/usr/bin/php {exe_path}|
|Javascript|/usr/bin/jsc {exe_path}|
|Go|/usr/bin/go build -o {exe_path} {src_path}|
|C#|/usr/bin/mcs -optimize+ -out:{exe_path} {src_path}|
|Ruby|/usr/bin/ruby {exe_path}|
|Rust|/usr/bin/rustc -O -o {exe_path} {src_path}|
|Haskell|/usr/bin/ghc -O -outputdir /tmp -o {exe_path} {src_path}|
|Free Pascal|/usr/bin/fpc -O2 -o{exe_path} {src_path}|
|Plaintext|/bin/cat {exe_path}|
|Free Basic|/usr/local/bin/fbc {src_path}|
</details>

<details>
<summary>Feature</summary>

Base on [NOJ Feature](https://github.com/ZsgsDesign/NOJ#supported-feature)
</details>
<details>
<summary>Trình duyệt yêu cầu</summary>

| [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/chrome/chrome_48x48.png" alt="Chrome" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)</br>Chrome  |  [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/firefox/firefox_48x48.png" alt="Firefox" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)</br>Firefox  | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/main/src/archive/internet-explorer-tile_10-11/internet-explorer-tile_10-11_48x48.png" alt="IE" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)</br> Internet Explorer  |  [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/edge/edge_48x48.png" alt="Edge" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)</br> Edge  | [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/opera/opera_48x48.png" alt="Opera" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)</br>Opera                  |       [<img src="https://raw.githubusercontent.com/alrra/browser-logos/master/src/safari/safari_48x48.png" alt="Safari" width="24px" height="24px" />](http://godban.github.io/browsers-support-badges/)</br>Safari       |
|:---------:|:-----------:|:-------------:|:-----------------:|:----------------:|:----------------:|
|69 and above|62 and above|Not supported|69 and above|Not Supported|13.1 and above|
</details>

## Cài đặt nhanh
### Platform:
Triển khai trên các hệ thống dưới đây để dễ dàng nhất và tránh gặp các lỗi linh tinh :)

- Ubuntu **20.04+**
- CentOS Linux release **8.0+**
- **Không sử dụng Windows**

### Môi trường
Cài đặt trước những thứ sau:

![PHP](https://img.shields.io/badge/php-%5E7.4.3-%23777BB4?style=for-the-badge&logo=php)
![Composer](https://img.shields.io/badge/composer-%3E%3D2.3.0-green?style=for-the-badge&logo=composer)
![MySQL](https://img.shields.io/badge/mysql-%3E%3D8.0.0-green?style=for-the-badge&logo=mysql&color=3E6E93)
![Redis](https://img.shields.io/badge/redis-%3E%3D5.0.0-green?style=for-the-badge&logo=redis&color=red)
![NodeJS](https://img.shields.io/badge/nodejs-%5E14.20.0-green?style=for-the-badge&logo=node.js)
![NPM](https://img.shields.io/badge/npm-%5E6.14.17-green?style=for-the-badge&logo=npm)
![Apache](https://img.shields.io/badge/apache-%5E2.4.41-orange?style=for-the-badge&logo=apache)

**Note**: 
- Các phiên bản đã được test trên Ubuntu 20.04. Trên các hệ thống khác cần chú ý phiên bản khi cài đặt.
- NodeJS nên cài đặt bằng nvm.
- Các hướng dẫn tiếp theo được thực hiện trên Ubuntu 20.04 [amd64] dùng Apache2, các distro khác thực hiện tương tự, riêng trường hợp dùng Windows, Nginx lỗi không support :)

### Cài đặt web interface
- wkhtmltopdf 0.12.6
    ```
    wget https://github.com/wkhtmltopdf/packaging/releases/download/0.12.6-1/wkhtmltox_0.12.6-1.focal_amd64.deb`
    sudo dpkg -i wkhtmltox_0.12.6-1.focal_amd64.deb
    ```
    Bước này thường sẽ gặp lỗi
    ```
    dpkg: dependency problems prevent configuration of wkhtmltox:
     wkhtmltox depends on xfonts-75dpi; however:
      Package xfonts-75dpi is not installed.
     wkhtmltox depends on xfonts-base; however:
      Package xfonts-base is not installed.
    ```
    Thay vì google search rồi vào StackOverflow thì ta chạy mấy dòng sau để fix:
    ```
    sudo add-apt-repository "deb http://archive.canonical.com/ $(lsb_release -sc) partner"
    sudo apt --fix-broken install
    sudo dpkg -i wkhtmltox_0.12.6-1.focal_amd64.deb
    ```
- Clone project
    ```
    git clone https://github.com/lvdat/NOJ.git
    cd NOJ
    ```
- Config host, ví dụ tôi dùng domain `ctuoj.local`
    ```
    sudo cp examples/apache2.conf /etc/apache2/sites-available/ctuoj.local.conf
    sudo vim /etc/apache2/sites-available/ctuoj.local.conf
    ```
    Tìm và sửa `ServerName` thành domain, `DocumentRoot`, `Directory` thành đường dẫn đến thư mục NOJ/**public**, file config sẽ giống như vầy:
    ```
    <VirtualHost *:80>
        ServerName ctuoj.local

        DocumentRoot /home/levandat/NOJ/public

        <Directory /home/levandat/NOJ/public>
                Options Indexes FollowSymLinks MultiViews
                AllowOverride All
                Order allow,deny
                allow from all
                Require all granted
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

    </VirtualHost>
    ```
    Disable default site, enable rewrite, NOJ and reload Apache2
    ```
    sudo a2dissite 000-default
    sudo a2enmod rewrite
    sudo a2ensite ctuoj.local
    sudo service apache2 reload
    ```
- Cài đặt package
    ```
    sudo apt install php-intl php-gd php-mbstring php-zip php-curl php-mysql php-xml php-dom
    composer install
    ```
- Để tránh lỗi phân quyền và mò mấy tiếng để fix thì tôi đề xuất đổi user chạy các task của OJ thành current user.
    Đổi user apache:
    ```
    sudo vim /etc/apache2/envvars
    ```
    Sửa user và group
    ```
    export APACHE_RUN_USER=lvdat
    export APACHE_RUN_GROUP=lvdat
    ```
    Nếu bạn dùng php-fpm thì tự search cách đổi, php thường không cần. Hoặc nếu bạn không thích cách này vẫn có thể chmod theo docs của Laravel.
- Set up Database
    ```
    mysql -u root -p
    CREATE DATABASE noj CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
    CREATE USER 'noj'@'localhost' IDENTIFIED BY 'nojsobruh';
    GRANT ALL PRIVILEGES ON noj.* TO 'noj'@'localhost';
    FLUSH PRIVILEGES;
    \q
    ```
- Tạo file `.env`
    ```
    cp .env.example .env
    vim .env
    ```
    Chỉnh sửa thông tin database và base url
    ```
    APP_URL=http://127.0.0.1

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=noj
    DB_USERNAME=noj
    DB_PASSWORD=nojsobruh
    ```
- Set key mới
    ```
    php artisan key:generate
    ```
- Migration
    ```
    php artisan migrate
    ```
- Install passport (for API Auth Services)
    ```
    php artisan passport:install
    ```
- CI npm
    ```
    npm ci
    ```
- Build static
    ```
    npm run production
    ```
- Add NOJ label
    ```
    php artisan babel:install noj
    ```
Đã set up xong web interface.

### Cài đặt judge server
...
### Sync test case giữa client và judger server
...

## License
[![FOSSA Status](https://app.fossa.com/api/projects/git%2Bgithub.com%2Flvdat%2FNOJ.svg?type=large)](https://app.fossa.com/projects/git%2Bgithub.com%2Flvdat%2FNOJ?ref=badge_large)