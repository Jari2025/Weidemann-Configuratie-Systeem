# Weidemann Configuratie Systeem

Webapplicatie en beheerpaneel ontwikkeld met Laravel (Blade) en Filament v5.

## Vereisten

* **XAMPP** (inclusief PHP 8.2+ en MySQL)
* **Composer**
* **Git**

---

## 1. Project downloaden (Klonen)

Open de terminal (PowerShell/CMD op Windows, Terminal op macOS), navigeer naar de `htdocs`-map van XAMPP en kloon het project:

**Windows:**
```bash
cd C:\xampp\htdocs
git clone <GITHUB_REPO_URL>
cd Weidemann-Configuratie-Systeem
```

**macOS:**
```bash
cd /Applications/XAMPP/xamppfiles/htdocs
git clone <GITHUB_REPO_URL>
cd Weidemann-Configuratie-Systeem
```

---

## 2. Afhankelijkheden installeren

Installeer de benodigde Composer-pakketten in de projectmap:

```bash
composer install
```

---

## 3. Omgevingsvariabelen (.env) en Applicatiesleutel

Kopieer het voorbeeldbestand naar `.env` en genereer een `APP_KEY`:

**Windows:**
```bash
copy .env.example .env
php artisan key:generate
```

**macOS:**
```bash
cp .env.example .env
php artisan key:generate
```

---

## 4. MySQL-database aanmaken

1. Start **Apache** en **MySQL** via het **XAMPP Control Panel**.
2. Ga in je browser naar `http://localhost/phpmyadmin`.
3. Klik in het linkermenu op **New** (Nieuw).
4. Vul bij **Database name** `weidemann` in en klik op **Create** (Aanmaken).

*(Alternatief via de terminal)*:
* **Windows:** `C:\xampp\mysql\bin\mysql.exe -u root -e "CREATE DATABASE IF NOT EXISTS weidemann;"`
* **macOS:** `/Applications/XAMPP/xamppfiles/bin/mysql -u root -e "CREATE DATABASE IF NOT EXISTS weidemann;"`

---

## 5. Databaseverbinding en Tabellen (Migraties)

Open het `.env`-bestand en controleer of de database-instellingen overeenkomen met onderstaande gegevens:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=weidemann
DB_USERNAME=root
DB_PASSWORD=
```

Voer daarna de migraties uit om de tabellen aan te maken:

```bash
php artisan migrate
```

---

## 6. Beheerder aanmaken (Admin)

Maak lokaal een beheerdersaccount aan om in te loggen op het Filament-paneel:

```bash
php artisan make:filament-user
```

> **Beveiligingsopmerking:** Uit veiligheidsoverwegingen staan de standaard inloggegevens voor het beheerdersaccount niet in dit bestand. Deze gegevens worden gedeeld via het Microsoft Teams-gesprek.

---

## 7. Project starten

Start de lokale ontwikkelserver:

```bash
php artisan serve
```

* **Startpagina (Blade):** `http://127.0.0.1:8000`
* **Adminpaneel (Filament):** `http://127.0.0.1:8000/admin`
