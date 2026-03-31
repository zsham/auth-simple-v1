Here’s a simple, clean example of how to build a PHP register + login system using MySQL and sessions. This is a basic version (good for learning), but I’ll include secure practices like password hashing.

Important Security Tips
Always use password_hash() and password_verify() ✔️
Use prepared statements (prevents SQL injection) ✔️
Add validation (min password length, etc.)
Use HTTPS in real projects
Consider adding CSRF protection
