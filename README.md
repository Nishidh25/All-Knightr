# All-Knightr
Online Game Shopping Site (WP project).

## Installation
* Install [XAMPP](https://www.apachefriends.org/download.html "XAMPP Download").
* Open XAMPP Control panal and start Apache and MySQL Services.
* Download project from [github](https://github.com/Nishidh25/All-Knightr.git "All-Knightr") or follow the following gitbash commands
  * `cd C:\\xampp\htdocs\`
  * `git clone https://github.com/Nishidh25/All-Knightr.git`
* Extract files to C:\\xampp\htdocs\.
* Open localhost/phpmyadmin/ or localhost:8080/phpmyadmin/ on your browser.
* Click on new at side navbar.
* Create a database with name `nishidh`. Note if you wold like to change database properies then edit the following code in [dbcontroller.php](https://github.com/Nishidh25/All-Knightr/blob/master/project/dbcontroller.php) ,[memb.php](https://github.com/Nishidh25/All-Knightr/blob/master/project/memb.php) and [balupdate.php](https://github.com/Nishidh25/All-Knightr/blob/master/project/balupdate.php) with your own values.
  *  `private $user = "root";`
  *  `private $password = "";`
  *  `private $database = "nishidh";`
 * After creating a database , import [tblproduct.sql](https://github.com/Nishidh25/All-Knightr/blob/master/project/tblproduct.sql) and [signin.sql](https://github.com/Nishidh25/All-Knightr/blob/master/project/signin.sql) from `C:\xampp\htdocs\project\....` or your current working directory.
* Open http://localhost/project/tabs.php on your browser to view the project.

## Screenshots
