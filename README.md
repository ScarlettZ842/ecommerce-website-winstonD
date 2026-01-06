# Ecommerce-Website [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

The _Planet Shopify_ is an ecommerce website. Developed using PHP in backend and MySQL database, with HTML and Bootstrap in frontend.
Also used [formspree](https://formspree.io) in contact form.

## Technologies

- [PHP](https://www.php.net/docs.php) 8.1
- [Bootstrap](https://getbootstrap.com) 4.1.3
- [MySQL](https://www.mysql.com) 8.0
- [HTML](https://www.w3schools.com/html/default.asp)
- [CSS](https://www.w3schools.com/css/default.asp)
- [Docker](https://www.docker.com) & Docker Compose

[view screenshots](https://winston-dsouza.github.io/#projects)

![index](https://github.com/winston-dsouza/winston-dsouza.github.io/blob/master/images/ecom/productgif.gif)

## Quick Start with Docker (Recommended)

### Prerequisites

- [Docker](https://www.docker.com/get-started) installed on your machine
- Docker Compose (included with Docker Desktop)

### Running the Application

1. **Clone or download this repository**

2. **Start the application**

   ```bash
   docker compose up -d
   ```

3. **Access the website**

   - Open your browser and navigate to: **http://localhost:8080**
   - The database is automatically initialized with sample products

4. **Stop the application**

   ```bash
   docker compose down
   ```

5. **Stop and remove all data**
   ```bash
   docker compose down -v
   ```

### Docker Services

- **Web Server**: PHP 8.1 with Apache (port 8080)
- **Database**: MySQL 8.0 (port 3306)
- **Database Name**: `ecommerce_db_winston`
- **Container Names**: `ecommerce_web_winston`, `ecommerce_db_winston`

### Database Access

**View users in database:**

```bash
docker exec -it ecommerce_db_winston mysql -uroot -proot ecommerce_db_winston -e "SELECT * FROM users;"
```

**Interactive MySQL session:**

```bash
docker exec -it ecommerce_db_winston mysql -uroot -proot ecommerce_db_winston
```

**Connection Details:**

- Host: `localhost` (or `db` from within containers)
- Port: `3306`
- Username: `root`
- Password: `root`
- Database: `ecommerce_db_winston`

### Troubleshooting

**If containers already exist:**

```bash
docker compose down
docker compose up -d
```

**Reset database:**

```bash
docker compose down -v
docker compose up -d
```

**View logs:**

```bash
docker compose logs -f
```

## Alternative Setup (Traditional XAMPP)

If you prefer not to use Docker:

- Start the Apache and MySQL modules using the **XAMPP** controller.
- Open the **phpMyAdmin** and create a database **"ecommerce_db_winston"**.
- Import the **ecommerce.sql** file present in the folder.
- Copy paste the folder to the htdocs folder in the xampp directory.
- Open the browser and navigate to _localhost/ecommerce-website-winstonD_

## Features

- User registration and login
- Product catalog
- Shopping cart functionality
- Checkout process
- Responsive design with Bootstrap

_Note: In about.php in this [line](https://github.com/winston-dsouza/Planet-Shopify-ecommerce-website/blob/master/about.php#L71) enter your email_ and activate the form
