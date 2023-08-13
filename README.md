# Employee Management System

This repository contains a PHP-based Employee Management System that allows you to perform CRUD (Create, Read, Update, Delete) operations on employees. The system includes input field validations, front-end validation using JavaScript, and user authentication to control access.

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- CRUD operations for employees
- Input field validations with appropriate warning messages
- Front-end validation using JavaScript
- User authentication to control access

## Prerequisites

Before you begin, ensure you have the following installed:

- [XAMPP](https://www.apachefriends.org/index.html): A development environment containing Apache, MySQL, PHP, and Perl.

## Installation

1. Install XAMPP by following the instructions on their website.

2. Clone this repository to your local machine using:

   ```bash
   git clone https://github.com/sammanamgain/Employee-management-using-php.git



Move the cloned repository files to the lab folder inside the htdocs directory of your XAMPP installation. The directory structure should look like:

dashboard</br>
img</br>
lab</br>
tuts</br>
webalizer</br>
xampp</br>
applications</br>
Chrome HTML Document</br>
bitnami.css</br>
favicon</br>
index.php</br>
Start the Apache and MySQL services from the XAMPP control panel.</br>

Import the database schema into your MySQL database:</br>
create a database called company </br>
inside company create two table :</br>
1)companydetails</br>
2)employee</br>
companydetaisl schema looks like this</br>
![image](https://github.com/sammanamgain/Employee-management-using-php/assets/78356846/40d72fb9-f12c-48bf-9b0c-9e1f2f9dda03)
employee schema looks like this</br>
![image](https://github.com/sammanamgain/Employee-management-using-php/assets/78356846/17101373-4cfc-4beb-8ea2-670926737e5b)
also create users database and create a table user  and schema looks like this</br>
![image](https://github.com/sammanamgain/Employee-management-using-php/assets/78356846/6004ad08-ca86-4f7e-87ce-6ebb05de86e8)




Open a web browser and navigate to http://localhost/phpmyadmin.
Create a new database named employee_management_db.
Inside the newly created database, import the database.sql file from the repository's root directory.
##Usage
Open a web browser and navigate to http://localhost/lab.

You'll be prompted to log in.
First create a userid , use signup button and after this you will be redirected to login page  and use username and password to navigate to home folder

Username: 
Password: 
Once logged in, you can perform CRUD operations on employees and company . The input fields are validated both on the front-end using JavaScript and on the back-end using PHP.

##Contributing
Contributions are welcome! If you find any issues or improvements, feel free to create a pull request.


