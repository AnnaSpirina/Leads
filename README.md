## Инструкция к развёртыванию
1. Убедитесь, что у вас установлены php (8.2.12), composer (2.7.8), mysql.
2. Откройте командную строку или терминал и выполните команду ```git clone https://github.com/AnnaSpirina/Leads```
3. Перейдите в директорию вашего проекта в командной строке ```cd path/to/your/project```
4. Выполните команду для установки зависимостей с помощью Composer ```composer install```
5. Скопируйте файл ```.env.example``` в ```.env```
6. Откройте файл ```.env``` в текстовом редакторе и настройте параметры подключения к базе данных:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lids
DB_USERNAME=root
# DB_PASSWORD=
```
А также измените строки:
```
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=465
MAIL_USERNAME=spirinaanna2003@gmail.com
MAIL_PASSWORD=apjvocgpspkhgbjv
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="spirinaanna2003@gmail.com"
MAIL_FROM_NAME="Сброс пароля"
```
7. Сгенерируйте приложение ключ, выполнив команду ```php artisan key:generate```
8. Выполните миграцию базы данных ```php artisan migrate```
9. Теперь вы можете запустить встроенный сервер PHP с помощью команды ```php artisan serve```. Перейдите по предлодженному адресу в вашем браузере, чтобы увидеть приложение
