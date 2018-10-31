Run this code inside a webserver and you will be able to view the sql query to execute on the database.
Make sure to you are running this inside the local server.
After being in a webserver make sure you add the database details in query_execute.php file

$myHostName = "YOUR HOST NAME HERE";
$username = "YOUR PHP MY ADMIN USERNAME";
$password = "YOUR PHP MY ADMIN PASSWORD";
$database_in_use = "NAME OF YOUR DATABASE";

make changes according to your server.

THE CODE IS FOR THE SITUATION PROVIDED EMPLOYEE DETAILS.

So after creating a database in the phpmyadmin create a table employee_details and create these columns id_no, name, age, job, salary.
Then all set open the localhost in browser and enter your query and have it executed on your database.
