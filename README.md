# Employee Management System

This repository contains a PHP-based Employee Management System that allows you to perform CRUD (Create, Read, Update, Delete) operations on employees. The system includes input field validations, front-end validation using JavaScript, and user authentication to control access.

## Table of Contents

- [Features](#features)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)


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
<ul>
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
</ul>
<p>
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
</p>


<P>
Open xampp admin panel , start the apache server and move to the admin panel and also start the MySQL server and click on admin panel</br>
Create a new database named employee_management_db.</br>
Inside the newly created database, import the database.sql file from the repository's root directory.</br>
</P>


## Usage


<p>
click the admin panel menu from xampp and you  will be redirected to home page</br>


You'll be prompted to log in.</br>
Login page looks like this.</br>
![image](https://github.com/sammanamgain/Employee-management-using-php/assets/78356846/a67fd3eb-59d7-42b5-a5fb-9a9038423952)

First create a userid , use signup button</br>
![image](https://github.com/sammanamgain/Employee-management-using-php/assets/78356846/ccacc27b-f782-43f5-89a2-6f2c8741f5c2)


and after this you will be redirected to login page  and use username and password to navigate to home folder</br>

Username: </br>
Password: </br>
Once logged in, you can perform CRUD operations on employees and company . The input fields are validated both on the front-end using JavaScript and on the back-end using PHP.</br>
company information UI looks like this</br>
![image](https://github.com/sammanamgain/Employee-management-using-php/assets/78356846/d012c345-d115-46b0-ac6b-e1a7efe17b5c)


</p>


## Contributing</br>


Contributions are welcome! If you find any issues or improvements, feel free to create a pull request.</br>


