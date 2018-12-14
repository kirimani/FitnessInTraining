These instructions will detail how you can recreate the application on your local machine. This application is compatible with any operating system.
# Local System Setup
## Server Setup:
Download XAMPP on your computer. Once downloaded, open the application and go to manage servers and turn all of them on.
## Running the Application:
Download the code from Github. Navigate to the Applications folder, open the XAMPP folder, and open the htdocs folder. Move the source code into this folder. Open a browser and type in “localhost/home.html”. You can navigate and use the application from there.

You can also run the application through AWS Beanstalk.
# AWS Beanstalk
## Server Setup:
We utilized AWS Beanstalk to host our web application. We chose this because AWS Beanstalk is made for hosting web applications and takes care of setting up the EC2 instance and other services for you.
## Database Setup:
We used MySQLWorkbench for our database. First you need to download this application. Then you will need to create a new database in your AWS Beanstalk console. To do that go to configuration on the left hand side of your Beanstalk console. Scroll down to database and click modify. Since the database was already initialized, you will see the "Endpoint" which is a long string of random letters and numbers. Remove the last four numbers and the colon and this is your Hostname.
You will go to MySQLWorkbench and add that string in the Hostname section. The Port number will stay the same.

*Username: root*
*Password: password*

Test your connection. This should work and you should see the database named FittnessInTraining which is the database for this application.
## Versioning
In order to update simply go to the application on the AWS Beanstalk console. Download the repo from Github. Go into the main file and select all the files inside and compress them. Make sure you don't make a zip file of the original total, file. You **must** go into the file and create a zip file of the contents. Then select the Upload and Deploy button to upload that zip file. That will deploy your new version. If that fails, it will roll back to the version before the failed deploy. We are currently on fit-v9 of our application. 

## File Structure:
The file structure of our database is organized such that there is separation of the HTML and CSS. As for the PHP, we implemented that at the same level of our HTML files to make calling easier. We are accessing third-party libraries and APIs by calling them using JavaScript, so there is no need to download them into our repository.
## Software/Libraries:
In terms of the external libraries and APIs used in this database, we implemented the Bootstrap framework to help with our front-end development. We also implemented chart.js in order to visualize users’ fitness and nutrition for each day.
## Database Structure:
Our database has two tables,  “Nutrition” and “Fitness”, that have are related to each other by the email column. The rows for the “Nutrition” table are “Email”, “Calories”, “Carbs”, “Fats”, and “Protein”. As for the “Fitness” table, those rows will include “Email”, “Calories”, “Days”, and “Time”. The "Email" column in both these tables is the primary key and what joins these two tables together.
