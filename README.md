# Oauth - Система авторизации от новичка

### Endpoint
## Auth
| Endpoint | Метод | Описание |
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

## Blog
| Endpoint | Метод | Описание |
|----------|-------|----------|
| /api/v1/blog/posts | GET | Получить список всех постов блога |
| /api/v1/blog/posts | POST | Создать новый поста |
| /api/v1/blog/posts/{id} | GET | Получить пост по ID поста |
| /api/v1/blog/posts/{id} | DELETE | Удалить пост по ID поста |
## Requests
| Endpoint | Метод | Описание |
|----------|-------|----------|
| /api/v1/requests | GET | Создание заявки |
| /api/v1/requests | POST | Создать новую заявку |
| /api/v1/requests/{id} | GET | Получить заявку по ID заявки |
| /api/v1/requests/{id} | DELETE | Удалить заявку по ID заявки |

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

