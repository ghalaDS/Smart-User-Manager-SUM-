# User Status Toggle System

[![Made with PHP](https://img.shields.io/badge/Made%20with-PHP-8892BF?style=for-the-badge&logo=php&logoColor=white)](#)
[![MySQL](https://img.shields.io/badge/Database-MySQL-blue?style=for-the-badge&logo=mysql&logoColor=white)](#)
[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg?style=for-the-badge)](./LICENSE)

> A clean and lightweight PHP + MySQL web app that lets you add users and toggle their active/inactive status instantly.

---

## Demo Preview

![App Preview](./screenshot.png)  
*Simple interface for adding users and toggling their status live.*

---

## Features
- Add new users with name and age
- Toggle user status without page reload (AJAX)
- Input validation (no negative age)
- MySQL database connection with PHP
- Responsive design with soft UI

---

## Folder Structure
```bash
live-user-toggle-system/
├── index.html
├── style.css
├── db.php
├── insert.php
├── update.php
├── fetch.php
```
---

## Tech Stack
- **HTML / CSS / JavaScript**
- **PHP 8+**
- **MySQL (phpMyAdmin)**
- **XAMPP for local server**

---

## Getting Started
1. Copy the folder to `htdocs` in XAMPP
2. Start Apache + MySQL
3. Open browser: `http://localhost/live-user-toggle-system/index.html`

---

## Notes
- DB name: `user_management`
- Table: `users`
- Default status = active

---

## License

This project is licensed under the MIT License - see the [LICENSE](./LICENSE) file for details.
