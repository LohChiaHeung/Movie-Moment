# Movie Moment （M&M)
Movie Moment (M&M) is a web-based movie recommendation system that conducted by our project team. The main goal of this movie recommendation system is to provide an <strong>online platform</strong> for movie lovers to share their views and opinions about movies. In our system, users are able to post anything about movies in the movie community pages.

Besides, as a usual movie recommendation system, our Movie Moment also provide latest movie information that will be shown in the future, and also current and old movie information. Our system can also make our users saving time on searching movie to watch in the searching platform. It is because our Movie Moment will provide <strong>movie recommendation</strong> for users. Users are able to choose their favorite types of movies to look for such as horror, romance, science fiction and so on. Our system also provides <strong>top 10 movies / TV Shows lists </strong> based on the rating provided by the users and it will be updated every day. It enables users to follow up the movie trends worldwide.

Through our movie recommendation system, we hope that our users can enjoy these services and functions provided by our system. Lastly, our project team will try our best to improve and make our movie recommendation system better and more advanced in the future development.

<strong>Please read the instructions below. </strong>

<Strong>How to receive users' contact us form as a admin? </strong> <br>
Step 1: Go to https://mailtrap.io/ to register ur account. <br>
Step 2: Login to your mailtrap account.<br>
Step 3: Click Sandbox -> Inboxes -> My Inbox -> SMTP Settings<br>
Step 4: View the line： <br> 
--user 'c3ad***:0655**'<br>
*The first one is your username*. <br>
*The second one is your password*. <br>
Step 5 : Go to .env file. <br>
Step 6: Change the following details.<br>
------------------------.env---------------------- <br>
MAIL_MAILER=smtp <br>
MAIL_HOST=smtp.mailtrap.io <br>
MAIL_PORT=465<br>
MAIL_USERNAME=c3ad** [Your mailtrap username] <br>
MAIL_PASSWORD=0655** [Your mailtrap password]<br>
MAIL_ENCRYPTION=null <br>
MAIL_FROM_ADDRESS=null <br>
MAIL_FROM_NAME="${APP_NAME}" [Your application name] <br>
------------------------.env-----------------------
<br><br>
<strong>Examples of User Account: </strong><br>
Email:user@example.com <br>
Password:12345678 <br>
<strong>Examples of Admin Account: </strong> <br>
Email:admin@example.com <br>
Password:12345678 <br>
<br><br>
<strong>We provide the database seeder.</strong> Just use the commands 'php artisan db:seed' to insert the data into the table.
    
