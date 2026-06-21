# Medi Track System

A Laravel-based Pharmacy Management System for managing pharmacies, doctors, clients, medicines, prescriptions, orders, payments, areas, and revenue reporting from a single web dashboard. 

The system is designed around four distinct user roles: **Admin**, **Pharmacy**, **Doctor**, and **Client**. Admin users manage the entire platform, pharmacy users handle local pharmacy-related operations, doctors oversee assigned orders, and clients can register, manage addresses, and place orders through the REST API.

![Pharmacy ERD](pharmacyERD.png)

---

## 📋 Table of Contents
- [Features](#-features)
- [Tech Stack](#%EF%B8%8F-tech-stack)
- [User Roles](#-user-roles)
- [Requirements](#-requirements)
- [Installation](#%EF%B8%8F-installation)
- [Database Setup](#%EF%B8%8F-database-setup)
- [Running the Project](#%EF%B8%8F-running-the-project)
- [Default Admin Login](#-default-admin-login)
- [API Endpoints](#-api-endpoints)
- [Web Routes Overview](#-web-routes-overview)
- [Project Structure](#-project-structure)
- [Useful Commands](#-useful-commands)
- [Troubleshooting](#-troubleshooting)
- [Author](#-author)

---

## ✨ Features
* User authentication and secure email verification.
* Role and permission management via Spatie.
* Dedicated Admin, Pharmacy, Doctor, and Client dashboards.
* Doctor management with administrative ban and unban actions.
* Medicine management, stock tracking, and pricing.
* Complete order lifecycle tracking, confirmation, and status updates.
* Full support for user prescription uploads.
* Secure **Stripe** payment integration.
* Automated revenue reports for individual pharmacies with chart-based statistics.
* REST API endpoints for client registration, login, address books, and mobile ordering.
* Excel and interactive DataTable support for data reporting exports.

---

## 🛠️ Tech Stack
* **Backend:** PHP 8, Laravel 9
* **Frontend:** Blade, Bootstrap, Sass, JavaScript, jQuery
* **Build Tool:** Vite
* **Database:** SQLite or MySQL
* **Authentication:** Laravel UI, Laravel Sanctum
* **Permissions:** Spatie Laravel Permission
* **Payments:** Stripe PHP SDK
* **Tables/Reports:** Yajra DataTables, Laravel Excel
* **Email Client:** Laravel Mail / SMTP

---

## 👥 User Roles

| Role | Description |
| :--- | :--- |
| **Admin** | Full system control over users, pharmacies, doctors, clients, medicines, configurations, and global revenue reports. |
| **Pharmacy** | Manages localized pharmacy profile parameters, assigned doctors, orders, and local revenue channels. |
| **Doctor** | Views, logs, and processes assigned prescription/order workflow components. |
| **Client** | Registers, manages shipping addresses, and creates purchase orders through the system API. |

---

## 📌 Requirements
Ensure you have the following packages installed and enabled on your environment:
* PHP `^8.0.2`
* Composer
* Node.js and npm
* SQLite or MySQL
* Required PHP Extensions: `openssl`, `pdo`, `pdo_sqlite` or `pdo_mysql`, `mbstring`, `fileinfo`, `gd`, `zip`, `curl`

> 💡 **XAMPP Users (Windows):** Open `C:\xampp\php\php.ini` and make sure you uncomment the following extension settings:
> ```ini
> extension=gd
> extension=zip
> ```

---

## ⚙️ Installation

1. **Clone the repository:**
```bash
   git clone [https://github.com/mohammedsharfan99-23Da2-0563/Medi_Track_System.git](https://github.com/mohammedsharfan99-23Da2-0563/Medi_Track_System.git)
   cd Medi_Track_System
