<?php

    $servername = "localhost";
    $dbname = "PortfolioCMMS";
    $username = "rootUser";
    $password = "rootPass";
    $user = "AdminCMMS";
    $pass = "PasswordCMMS";

    try {
        $conn = new PDO("mysql:host=$servername;", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Root connected successfully.<br>";
    } catch(PDOException $e) {
        echo "Root connection failed: " . $e->getMessage();
    }

    try {
        $conn->exec("CREATE USER '$user'@'localhost' IDENTIFIED BY '$pass';");
        echo "User created successfully.<br>";
        $conn->exec("GRANT ALL PRIVILEGES ON *.* TO '$user'@'localhost' WITH GRANT OPTION;");
        $conn->exec("FLUSH PRIVILEGES;");
        echo "User granted successfully.<br>";
        $conn = null;
    } catch (PDOException $e) {
        echo "Error at user management: " . $e->getMessage();
    }
    
    try {
        $conn = new PDO("mysql:host=$servername;", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "User connected successfully.<br>";
    } catch(PDOException $e) {
        echo "User connection failed: " . $e->getMessage();
    }

    try {
        $conn->exec("DROP DATABASE IF EXISTS $dbname;");
        echo "Database dropped successfully.<br>";
        $conn->exec("CREATE DATABASE $dbname;");
        echo "Database created successfully.<br>";
        $conn->exec("USE $dbname");
        echo "Database selected successfully.<br>";
    } catch (PDOException $e) {
        echo "Error creating database: " . $e->getMessage();
    }

    try {
        $conn->exec("
            CREATE TABLE User (
                user_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                user_username VARCHAR(50) NOT NULL UNIQUE,
                user_name VARCHAR(50) NOT NULL,
                user_lastname VARCHAR(50) NOT NULL,
                user_email VARCHAR(50) NOT NULL UNIQUE,
                user_password VARCHAR(50) NOT NULL,
                user_image VARCHAR(30) NOT NULL DEFAULT 'default.png',
                user_category VARCHAR(30) DEFAULT 'user'
            );

            CREATE TABLE Blogs (
                blog_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                blog_media VARCHAR(30) NOT NULL,
                blog_title VARCHAR(50) NOT NULL,
                blog_content VARCHAR(255) NOT NULL,
                blog_author VARCHAR(50) NOT NULL,
                blog_author_id INT UNSIGNED NOT NULL,
                blog_category VARCHAR(30) NOT NULL,
                blog_date TIMESTAMP,
                foreign key (blog_author_id) references User(user_id),
                foreign key (blog_author) references User(user_username)
            );

            CREATE TABLE Posts (
                post_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                post_media VARCHAR(30) NOT NULL,
                post_title VARCHAR(50) NOT NULL,
                post_content VARCHAR(255) NOT NULL,
                post_author VARCHAR(50) NOT NULL,
                post_author_id INT UNSIGNED NOT NULL,
                post_category VARCHAR(30) NOT NULL,
                post_date TIMESTAMP,
                foreign key (post_author_id) references User(user_id),
                foreign key (post_author) references User(user_username)
            );
            
            CREATE TABLE Comments (
                comment_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                comment_content VARCHAR(255) NOT NULL,
                comment_author VARCHAR(50) NOT NULL,
                comment_author_id INT UNSIGNED NOT NULL,
                comment_date TIMESTAMP,
                foreign key (comment_author_id) references User(user_id),
                foreign key (comment_author) references User(user_username)
            );
            ");
        echo "Tables created successfully.<br>";
    } catch (PDOException $e) {
        echo "Error at table creation: " . $e->getMessage();
    }

    try {
        $conn->exec("
            INSERT INTO User 
                (user_username, user_name, user_lastname, user_email, user_password, user_image, user_category)
            VALUES 
                ('CMMS', 'Christian Manuel', 'Moreno Saldaña', 'christianmanuelms@gmail.com', '".password_hash('AdminPassword', PASSWORD_DEFAULT)."', 'cmms.jpg', 'admin');
            ");
    } catch (PDOException $e) {
        echo "Error at user insertion: " . $e->getMessage();
    }
?>