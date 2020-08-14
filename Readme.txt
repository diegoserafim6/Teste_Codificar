Test PHP Code

This project was developed in order to participate in the selection process of the company Codificar in 12/08/2020
The project developed is a simple CRUD



Technologies used:


This project was developed using the Laravel 7.x Framework and Bootstrap 4.5. For its operation it is necessary to use a local server like wampserver or XAMPP and a terminal like CMD of windows.

Reference:

Laravel : https://laravel.com/
Bootstrap : https://getbootstrap.com/


Environment :

To download files for test acess the link:  git@github.com:diegoserafim6/Teste_Codificar.git

After downlaod, it is necessary to connect to the database with the local server described in the step above. After the connection, it is necessary to create the bank for testing.

Through the selected terminal enter the command: php artisan migrate.



Optionally, you can add a fictitious bank using the sequence below on the chosen server:




INSERT INTO `cadastros` (`ID`, `Client`, `Seller`, `Description`, `Value`, `Data`) VALUES
(1, 'Carlos', 'Matheus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 100, '2020-08-19 13:07:28'),
(2, 'Maria', 'Matheus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 110, '2020-08-20 13:07:28'),
(3, 'Claudia', 'Flavio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 55, '2020-08-12 13:07:28'),
(4, 'Nayara', 'Matheus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 12, '2020-08-15 13:07:28'),
(5, 'Cesar', 'Flavio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 500, '2020-08-07 13:07:28'),
(6, 'Diego', 'Flavio', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1100, '2020-08-14 13:07:28'),
(7, 'Ana', 'Marta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 50, '2020-08-07 13:07:28'),
(8, 'Thiago', 'Marta', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 500, '2020-08-12 13:07:28'),
(9, 'Natalia', 'Matheus', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 600, '2020-08-19 13:07:28'),
(10, 'Leila', 'Mathes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 900, '2020-08-05 13:07:28');
 
