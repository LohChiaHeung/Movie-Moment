# Movie Moment （M&M)
It is our <strong> Final Year Project (FYP)</strong> for Diploma in Information Technology in Southern University College.
Movie Moment (M&M) is a web-based movie recommendation system that provided movie recommendation, movie community and rewards system for users. More detailed can be found in our official FB and Instagram page!  <br>
It is created by using <br>
Programming anguage & Scripting language :<strong> PHP(Main), JavaScript, Blade, CSS </strong> <br>
Platform Used:<strong> Visual Studio Code</strong><br>
Framework Used:<strong> Laravel Framework</strong><br>
Technology Used:<strong>TMDb API (The Movie Database API)</strong><br>

Our project has been won <strong> 3rd prize </strong> in the FYP Competition that organized by our university college, Southern University College. <br>
Movie Moment Introduction Video : https://www.youtube.com/watch?v=eCXvbwQdQ5Q <br>
Movie Moment System Demonstration: https://www.youtube.com/watch?v=LVfihKkG-bI <br>
Movie Moment Official Facebook Account: https://www.facebook.com/Movie-Moment-MM-109810318198221 <br>
Movie Moment Official Instagram Account: https://www.instagram.com/moviemoment_2022/
<br><br>




<strong> User Guide </strong> <br>
<strong>Please read the instructions below. 📘📘 </strong>

<Strong>How to receive users' contact us form 📧 as a admin? </strong> <br>
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
<br><br><strong>Database:</strong><br>
<strong>We provide the database seeder.</strong> Just use the commands <strong>'php artisan db:seed'</strong> to insert the data into the table.
    
