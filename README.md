# Дипломное задание по профессии "Веб-разработчик"

## Создание «информационной системы для администрирования залов, сеансов и предварительного бронирования билетов».

### Студенту предоставляются следующие компоненты системы:
* PHP-MVC-фреймворк для создания АПИ приложенияна базе Laravel Framework
    * ORM
    * Работа с коллекциями
    * Контроллеры
    * Роутинг
    * Авторизация/регистрация, управление ролями, гостевой доступ
* JS-фреймворк можно выбрать любой понравившийся(React, Angular, Vue, VanilaJS, jquery) - свой выбор согласовать с дипломным руководителем, обосновать выбор.
* Верстка(папка /layouts)

## Задачи
* Реализовать клиентскую часть: административный интерфейс, бронирование и контроль билетов на основе готовой верстки с использованием предоставленного, расширяемого фреймворка

* Реализовать серверную часть ИС на основе предоставленного скелета MVC

## Сущности
*Кинозал*
Помещение, в котором демонстрируются фильмы. Режим работы определяется расписанием на день. Зал - прямоугольный, состоит из N * M различных зрительских мест.

*Зрительское место*
Место в кинозале. Зрительские места могут быть VIP и обычные. 

*Фильм*
Информация о фильме заполняется администратором. Фильм связан с сеансом в кинозале.

*Сеанс*
Сеанс - это временной промежуток, в котором в кинозале будет показываться фильм. На сеанс могут быть забронированы билеты.

*Билет*
Право посещения сеанса в кинозале. В билете обязательно указаны место, ряд, сеанс, qr-код c уникальным кодом бронирования. Билет действителен строго на свой сеанс.

## Роли пользователей системы
* Администратор
* Контроллер
* Гость

### Возможности администратора
* Создание/редактирование залов
* Создание/редактирование фильмов
* Настройка цен
* Создание/редактирование расписания

### Возможности пользователя
* Просмотр расписания
* Просмотр фильмов
* Выбор места в кинозале
* Бронирование билета

## Компоненты системы
* Интерфейс администратора — Раздел фронтенд-приложения доступный для администратора, позволяет настроить кинозалы, цены на билеты, расписание показа фильмов, а также запустить старт бронирования.
* Интерфейс гостя — Раздел фронтенд-приложения доступный для всех посетителей сайта, реализует просмотр расписания, выбор сеанса, времени,  возможность забронировать билет и распечатать код бронирования.
* Интерфейс контроллера — Раздел фронтенд-приложения доступный для контроллера и администратора. Позволяет загрузить qr-код и получить по нему информацию.
* АПИ — Бекенд-приложение с достаточным набором роутов для работы фронтенд-приложения


## Этапы разработки
1. Верстка недостающих элементов системы: форма создания фильма, форма создания зала, пагинация и фильтрация фильмов, форма авторизации в ИС, страница загрузки QR кода.
2. Реализация  базового АПИ: на данном этапе создается бекенд-приложение с возможностями работы с пользователями, авторизацией -  все роуты проверяются по средствам rest-клиента(для примера https://install.advancedrestclient.com/)
3. Создание базового фронтенд-приложения: на этапе создается основа приложения, разделяется на разделы для гостя и авторизованных пользователей, а также подключение к АПИ.
4. Итерационное наращивание функционала (Continuous Integration): Расширение функциональности приложения небольшими частями, включающими разработку моделей и контроллеров на бек и соответствующие формы на фронт.

Стартовый набор для быстрого запуска API
(Laravel API Boilerplate (Vagrant, Passport)
)

Сборка содержит в себе:
* Laravel Passport - [laravel/passport](https://github.com/laravel/passport)
* Dingo API - [dingo/api](https://github.com/dingo/api) <a href="https://github.com/dingo/api/wiki/Creating-API-Endpoints" target="_blank">(информация)</a>
* Laravel-CORS [barryvdh/laravel-cors](http://github.com/barryvdh/laravel-cors) <a href="https://github.com/barryvdh/laravel-cors" target="_blank">(читать тут)</a>

## Vagrant
### Установить
* [VirtualBox](https://www.virtualbox.org/wiki/Downloads)
* [Vagrant](https://www.vagrantup.com/downloads.html)

### Склонировать репозиторий
```
git clone https://github.com/seregka-che/laravel-vagrant-passport
```
### Поднять локальный сервер на Vagrant
```
vagrant up
```
### Предустановленные роуты
Зарегистрировать нового пользователя и сегенерировать для него пароль можно используя командную строку
`php artisan passport:client --password`.

* `POST api/auth/login`, Авторизация и обновление токена;
* `POST api/auth/register`, Регистрация;
* `POST api/auth/recovery`, Восстановление пароля;
* `POST api/auth/reset`, Сброс пароля;
* `POST api/auth/logout`, "выход" - стереть данные по токену авторизации ;

### Сгенерировать ключи
```
php artisan passport:keys
```