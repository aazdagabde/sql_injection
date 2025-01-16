# SQL Injection Test Project 🔧

This project was developed by **Aazdag Abdellah** and **Salma Bousslama** as part of the "Information Security" course. The objective is to demonstrate and test web application vulnerabilities against SQL injection attacks.

## Technologies Used 🛠
- **Language**: PHP
- **Database**: MySQL
- **Local Server**: XAMPP (phpMyAdmin)

---

## Project Setup 📂

### Prerequisites 🔐
- **XAMPP**: Download and install XAMPP from [here](https://www.apachefriends.org/index.html).
- **phpMyAdmin**: Included with XAMPP.

### Downloading the Project 💾

1. Clone the GitHub repository:
   ```bash
   git clone https://github.com/aazdagabde/sql_injection.git
   ```
2. Move the cloned folder to the `htdocs` directory in XAMPP:
   ```bash
   C:\xampp\htdocs\sql-injection-test
   ```

### Setting Up the Database 🔄

1. Start XAMPP and ensure both **Apache** and **MySQL** services are running.
2. Open phpMyAdmin by visiting [http://localhost/phpmyadmin](http://localhost/phpmyadmin) in your web browser.
3. Create a new database named `test_injection_sql` by executing the following SQL query:
   ```sql
   CREATE DATABASE test_injection_sql;

   USE test_injection_sql;

   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nom VARCHAR(50),
       prenom VARCHAR(50),
       age INT,
       email VARCHAR(100),
       login VARCHAR(50),
       password VARCHAR(255)
   );

   INSERT INTO users (nom, prenom, age, email, login, password) VALUES
   ('aazdag', 'abdellah', 21, 'aazdag.23@gmail.com', 'aazdag23', 'aazdag23'),
   ('bousslama', 'salma', 21, 'bousslama.salma.23@ump.ac.ma', 'salma23', 'salma23'),
   ('ben ahmed', 'ahmed', 24, 'ahmed23@gmail.com', 'ahmed23', 'ahmed23'),
   ('bomazogh', 'fatima ezzahrae', 19, 'fatima.ezzahrae23@gmail.com', 'fatima_ezzahrae23', 'fatima_ezzahrae23'),
   ('admin', 'admin', 2, 'admin.itirc.2024@ump.ac.ma', 'admin', 'admin');
   ```

4. Verify that the data has been imported successfully.

### Configuring the Project 🔧

1. Update the database connection in `User.php` (located in `app/models/`) if necessary:
   ```php
   $this->pdo = new PDO('mysql:host=localhost;dbname=test_injection_sql', 'root', '');
   ```
2. Access the project in your browser:
   [http://localhost/sql-injection-test/public](http://localhost/sql-injection-test/public)

---

## Key Features 📊
- **User Authentication**: Login system based on credentials stored in the database.
- **User Management**: View and edit registered users.
- **SQL Injection Simulation**: Test and analyze vulnerabilities through input fields.

---

## Project Structure 🗒
- `app/controllers/`: Contains application logic files (e.g., `LoginController.php`, `UserController.php`).
- `app/models/`: Includes the data model (`User.php`).
- `app/views/`: Holds user interface files (e.g., `login.php`, `users.php`, `edit.php`).
- `public/`: Contains the project entry point (`index.php`).

---

## Disclaimer ⚠
This project is intended for educational purposes only. Do not use it to compromise the security of real-world systems.

---

## Contribution 📚
Contributions are welcome. Please create a **pull request** for suggestions or improvements.

---

## Team LinkedIn Profiles 💼
- **Aazdag Abdellah**: [LinkedIn Profile](https://www.linkedin.com/in/aazdag-abdellah/)
- **Salma Bousslama**: [LinkedIn Profile](https://www.linkedin.com/in/bousslama-salma-35857529b/)

---

Thank you for exploring this project! 🎉

