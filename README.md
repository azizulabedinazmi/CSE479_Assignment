<p align="center">
  <img src=".github/assets/banner.svg" alt="CSE479 Login and Register banner" width="100%">
</p>

# 🔐 CSE479 · Login & Register

A small **PHP + MySQL** assignment for **CSE479**: users register with name, email, phone, address and password, then log in.

## Files

| File | Purpose |
|---|---|
| [`register.php`](register.php) | Sign-up form; rejects emails that are already registered |
| [`login.php`](login.php) | Login form that checks credentials against the database |
| [`db_connect.php`](db_connect.php) | MySQL connection (`assignment_db` on `localhost`) |
| [`assignment_db.sql`](assignment_db.sql) | Creates the `users` table |
| [`style.css`](style.css) | Form styling |

## Run locally

1. Install XAMPP (or another PHP + MySQL stack) and start Apache and MySQL.
2. Create a database named `assignment_db` and import `assignment_db.sql`.
3. Update the credentials in `db_connect.php` if yours differ.
4. Copy the folder into `htdocs/` and open `http://localhost/CSE479_Assignment/register.php`.

> **Security note:** This is coursework. Passwords are stored as plain text and queries are built by string concatenation. Before using it for anything real, switch to `password_hash()` / `password_verify()` and prepared statements.
