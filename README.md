# 🗃️ Data Penduduk Kota Tinggi

Built CRUD based system for village chiefs to manage resident data, replacing paper-based records.

-[Live View »](https://datapenduduk.esrmy.com/)

## 🧩 Features

- 🔐 Secure storage of personal data
- ✅ Dynamic data entry, edit, search & filtering
- 📊 Auto calculation of income and commitment to decide status of residents
- 📩 Downloadable records and reports

---

## ⚙️ Tech Stack

- **Backend**: Laravel 10, PHP 8.x
- **Frontend**: Blade, Bootstrap 5, JavaScript, CSS3
- **Database**: MySQL
- **Other**: Git, VPS(Plesk)

---

## 🛠️ Installation

> Clone the repo and set it up locally

```bash
git clone https://github.com/CTE-ERSMY/data-penduduk.git
cd project-name
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
