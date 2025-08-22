
# Laravel Routes & Middleware Assignment

## 👤 Student Information
**Name:** Majed Sunedan  

---

## ⚙️ Installation

Clone the repository:
```bash
git clone https://github.com/MajedSanedan/web-routes-assignment
cd REPOSITORY
````

Install dependencies:

```bash
composer install
```

Run migrations (if needed):

```bash
php artisan migrate
```

Run the development server:

```bash
php artisan serve
```

---

## 🚀 Available Routes

* `/home` → **Home Page**
* `/about` → **About Us**
* `/user/{id}` → **User Profile: #id**
* `/search?q=laravel` → **Search results for: laravel**
* `/search` (بدون query) → **Please type a search term**

---

## 🔒 Middleware Protected Route

* `/grades?access=teacher` → **Student Grades**
* `/grades` (بدون access) → **403 Forbidden**

Middleware used: **CheckAccess**

---

## 📌 Notes

* The `vendor/` folder is excluded from GitHub (see `.gitignore`).
* To regenerate it, just run `composer install`.

---

