# BabiHost Backend API

Laravel backend API project developed for the Backend Developer Internship.

## Technologies Used

- PHP
- Laravel
- SQLite
- Eloquent ORM
- REST API
- Postman
- GitHub

---

## Features

- User management
- Property management
- Booking management
- Database relationships
- CRUD API endpoints
- Request validation
- API testing with Postman

---

## Database Structure

### Users
- id
- name
- email
- password

### Properties
- id
- user_id
- title
- description
- location
- price_per_night
- max_guests

### Bookings
- id
- user_id
- property_id
- check_in
- check_out
- guests
- total_price
- status

---

## Relationships

- User → hasMany Properties
- User → hasMany Bookings
- Property → belongsTo User
- Property → hasMany Bookings
- Booking → belongsTo User
- Booking → belongsTo Property

---

## API Endpoints

### Properties

GET

```text
/api/properties
```

POST

```text
/api/properties
```

### Bookings

GET

```text
/ api/bookings
```

POST

```text
/ api/bookings
```

---

## Run Project

Install dependencies:

```bash
composer install
```

Run migrations:

```bash
php artisan migrate
```

Start server:

```bash
php artisan serve
```

Server URL:

```text
http://127.0.0.1:8000
```

---

## API Testing

Endpoints tested using Postman.

---

## Author

Alexandre Karam