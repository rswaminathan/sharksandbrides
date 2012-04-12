------

Rahul Swaminathan
Problem Set 6

rswaminathan@hmc.edu

--------



INSTRUCTIONS:

Go to db.php and edit the $con variable to give access to your local database user and password.

Make sure this user has full admin priveleges to the database.

Then run ps6.sql  to create the database and all the tables.

The mysql socket file must be in /var/mysql/mysql.sock in a unix machine.

Then make sure apache is running and pointing to this directory, and it allows rewrite through htaccess.

Then go to http://localhost. If no data shows up, click the button "Seed database" which will seed random data.

Then you can go to the various searches on the top bar (price, budget, manufacturer) etc to sort in various ways.

Finally, the insert PC tab will allow you to insert a new PC. If the model Id already exists, then it will alert you.

It will retain the values so you can change the model id, and try again.


