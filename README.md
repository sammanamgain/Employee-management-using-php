Project: Employee Management System
This repository contains a PHP-based Employee Management System that allows you to perform CRUD (Create, Read, Update, Delete) operations on employees. The system includes input field validations, front-end validation using JavaScript, and user authentication to control access.

Table of Contents
Features
Prerequisites
Installation
Usage
Contributing
License
Features
CRUD operations for employees
Input field validations with appropriate warning messages
Front-end validation using JavaScript
User authentication to control access
Prerequisites
Before you begin, ensure you have the following installed:

XAMPP: A development environment containing Apache, MySQL, PHP, and Perl.
Installation
Install XAMPP by following the instructions on their website.

Clone this repository to your local machine using:


git clone https://github.com/sammanamgain/Employee-management-using-php.git
Move the cloned repository files to the lab folder inside the htdocs directory of your XAMPP installation. The directory structure should look like:


[XAMPP Installation Directory]
├── htdocs/
│   ├── lab/
│   │   ├── index.php
│   │   ├── employee.php
│   │   ├── js/
│   │   │   └── validation.js
│   │   ├── css/
│   │   │   └── styles.css
│   │   ├── ...
│   ├── ...
Start the Apache and MySQL services from the XAMPP control panel.

Import the database schema into your MySQL database:

Open a web browser and navigate to http://localhost/phpmyadmin.
Create a new database named employee_management_db.
Inside the newly created database, import the database.sql file from the repository's root directory.
Usage
Open a web browser and navigate to http://localhost/lab.

You'll be prompted to log in. Use the default credentials:

Username: admin
Password: password
Once logged in, you can perform CRUD operations on employees. The input fields are validated both on the front-end using JavaScript and on the back-end using PHP.

Contributing
Contributions are welcome! If you find any issues or improvements, feel free to create a pull request.

License
This project is licensed under the MIT License.
output looks like this
![image](https://github.com/sammanamgain/Employee-management-using-php/assets/78356846/3381fca7-5934-4ec3-a27f-55b0762a1da5)
![image](https://github.com/sammanamgain/Employee-management-using-php/assets/78356846/6235dcb4-9c55-4745-ba88-40febe72f0fa)
![image](https://github.com/sammanamgain/Employee-management-using-php/assets/78356846/99a9d543-7b1b-4ffe-8abd-444448145eda)
