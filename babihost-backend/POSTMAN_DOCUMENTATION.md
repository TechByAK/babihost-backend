# Postman API Testing

## Get All Properties

GET

http://127.0.0.1:8000/api/properties

---

## Create Property

POST

http://127.0.0.1:8000/api/properties

Body:

```json
{
  "user_id": 1,
  "title": "Modern Apartment",
  "description": "Nice apartment near the city center",
  "location": "Beirut",
  "price_per_night": 75,
  "max_guests": 3
}
```

---

## Get All Bookings

GET

http://127.0.0.1:8000/api/bookings

---

## Create Booking

POST

http://127.0.0.1:8000/api/bookings

Body:

```json
{
  "user_id": 1,
  "property_id": 1,
  "check_in": "2026-06-10",
  "check_out": "2026-06-15",
  "guests": 2,
  "total_price": 375,
  "status": "pending"
}
```