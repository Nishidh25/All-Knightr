# All-Knightr
An online game shopping site (Web Programming Project).

* Software languages used :
  * HTML 
  * PHP
  * CSS
  * Javascript

* Used framework :
  * Bootstrap
  
* Database :
  * 10.3.16-MariaDB - phpMyAdmin SQL

## Installation
* Install [XAMPP](https://www.apachefriends.org/download.html "XAMPP Download").
* Open XAMPP Control panal and start Apache and MySQL Services.
* Download project from [github](https://github.com/Nishidh25/All-Knightr.git "All-Knightr") or follow the following gitbash commands
  * `cd C:\\xampp\htdocs\`
  * `git clone https://github.com/Nishidh25/All-Knightr.git`
* Extract files to `C:\\xampp\htdocs\` or your current working directory.
* Open localhost/phpmyadmin/ or localhost:8080/phpmyadmin/ on your browser.
* Click on new at side navbar.
* Create a database with name `nishidh`. Note if you wold like to change database properies then edit the following code in [dbcontroller.php](https://github.com/Nishidh25/All-Knightr/blob/master/project/dbcontroller.php), [memb.php](https://github.com/Nishidh25/All-Knightr/blob/master/project/memb.php) and [balupdate.php](https://github.com/Nishidh25/All-Knightr/blob/master/project/balupdate.php) with your own values.
  *  `private $user = "root";`
  *  `private $password = "";`
  *  `private $database = "nishidh";`
 * After creating a database , import [tblproduct.sql](https://github.com/Nishidh25/All-Knightr/blob/master/project/tblproduct.sql) and [signin.sql](https://github.com/Nishidh25/All-Knightr/blob/master/project/signin.sql) from `C:\xampp\htdocs\project\....` or your current working directory.
* Open http://localhost/project/tabs.php on your browser to view the project.

## Screenshots
#### Home
![HOME_Page](https://github.com/Nishidh25/All-Knightr/blob/master/screenshots/Capture_Home.PNG)
#### Games
![Games_Page1](https://github.com/Nishidh25/All-Knightr/blob/master/screenshots/Capture_Games1.PNG)
![Games_Page2](https://github.com/Nishidh25/All-Knightr/blob/master/screenshots/Capture_Games2.PNG)
#### Signin/Signup
![Signup](https://github.com/Nishidh25/All-Knightr/blob/master/screenshots/Capture_Signup.PNG)
![Signin](https://github.com/Nishidh25/All-Knightr/blob/master/screenshots/Capture_Signin.PNG)
#### Membership
![Membership](https://github.com/Nishidh25/All-Knightr/blob/master/screenshots/Capture_Membership.PNG)

## Contributors
* [Nishidh Singh Shekhawat](https://github.com/Nishidh25)
* [Prashansa Dhomane](https://github.com/paridhomane)
