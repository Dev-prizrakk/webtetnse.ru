# Webtense - Прототип сайта для производственной практики
Это прототип сайта для производственной практики, разработанный с использованием Laravel и Docker. В проекте реализована базовая аутентификация пользователей с возможностью регистрации, входа, выхода, восстановления пароля и верификации email.
## Технологии
- PHP 8.x
- Laravel 11.x
- Docker и Docker Compose
- MySQL
- Swagger (для документации API)
## API Документация
Документация по API доступна по адресу: `http://localhost/api/v1/docs`

### Endpoint

| Endpoint | Метод | Описание (опционально) |
|----------|--------|------------------------|
| /api/v1/auth/email-verify/{user} | POST | отправка ссылки для верификации |
| /api/v1/auth/email-verify | POST | подтверждение верификации |
| /api/v1/auth/password/forgot | POST | запрос на восстановление пароля |
| /api/v1/auth/login | POST | авторизация |
| /api/v1/auth/logout | DELETE | выход из аккаунта |
| /api/v1/auth/me | GET | получение профиля пользователя |
| /api/v1/auth/registration | POST | регистрация |
| /api/v1/auth/password/reset | POST | сброс пароля |
| /api/v1/auth/password/token-check | POST | проверка токена восстановления |

### Ошибки
- По какой-то причине докер медлено работает из-за чего на API сайта 419 Page Expiried
- Функционал не тестирован
## Инструкция по установке

1. Клонируйте репозиторий:
   ```bash
    git clone https://github.com/Dev-prizrakk/webtetnse.ru.git
    cd webtetnse.ru
    ```
2. Поднять докер контейнеры:
   ```bash
   docker-compose up -d
   ```
3. Зайти в контейнер приложения:
   ```bash
   docker exec -it webtense_app bash
   ```
4. Установите зависимости с помощью Composer:
   ```bash
   composer install --no-dev
   ```
5. Скопируйте файл окружения и настройте его:
   ```bash
   cp .env.example .env
   ```
   Отредактируйте `.env`, указав настройки базы данных и другие параметры.
6. Выполните миграции и сиды:
   ```bash
   php artisan migrate --seed
   ```
7. Сгенерируйте ключ приложения:
   ```bash
   php artisan key:generate
   ```
8. (Опционально) Настройте почтовый сервер в `.env` для отправки email.
9. Приложение готово к использованию! Доступ к документации API можно получить по адресу:
   ```
   http://localhost/api/v1/docs
   ```
