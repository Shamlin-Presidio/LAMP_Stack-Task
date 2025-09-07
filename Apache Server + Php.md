# 🖥️ Apache + PHP + MySQL Setup Guide

This guide walks you through setting up an Apache server with PHP and testing a MySQL connection using a simple PHP script.

---

## 🔧 Step 1: Install Apache, PHP, and MySQL Modules

Run the following command to install Apache, PHP, and the necessary MySQL module:

```bash
sudo apt install apache2 php libapache2-mod-php php-mysql -y
sudo systemctl status apache2
sudo systemctl start apache2
```

## 🔧 Step 2: Start & Check Apache Server
```bash
sudo systemctl status apache2
```
_If not active, run this:_
```
sudo systemctl start apache2
```

## 📂 Step 3: Create a PHP File to Test MySQL Connection

Open or create a new PHP file in your web server's root directory:

sudo vim /var/www/html/dbtest.php
```
sudo vim /var/www/html/dbtest.php
```

> Paste the following code into the file:

```php
<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Fill with MySQL details given by Joel
$host = ''
$user = '';
$pass = '';
$db   = '';

// connect
$conn = @new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn && $conn->connect_errno == 0) {
    echo "<h2 style='color: green;'> Hola! 😁 Connected to MySQL successfully!</h2>";
} else {
    echo "<h2 style='color: red;'> 😢 Not connected to MySQL.</h2>";
    echo "<p>Error: " . ($conn ? $conn->connect_error : "Connection failed.") . "</p>";
}
?>
```

## Step 4: Test the Setup

http://<apaceh.server.public.ip>/dbtest.php
