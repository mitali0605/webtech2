ONLINE REGISTRATION FORM - PROJECT GUIDE

Files:
1. index.php  - Registration form (HTML form served by PHP)
2. style.css  - Page styling and responsive layout
3. script.js  - jQuery validation and date restriction
4. submit.php - PHP validation and formatted confirmation page

RUN LOCALLY:
1. Install XAMPP.
2. Start Apache from the XAMPP Control Panel.
3. Copy the online_registration_app folder into:
   C:\xampp\htdocs\
4. Open this URL in your browser:
   http://localhost/online_registration_app/

CLOUD HOSTING:
Use a PHP-supported hosting provider such as InfinityFree or another host that supports PHP.
1. Create a hosting account and a website/subdomain.
2. Open the hosting control panel's File Manager.
3. Open the website's document root (commonly htdocs or public_html).
4. Upload the four project files: index.php, submit.php, style.css, script.js.
   If you upload the ZIP, extract it in the document root.
5. Visit your website's assigned URL and test the form.
6. Ensure index.php is in the document root, not inside an extra nested folder.

HOW IT WORKS:
- HTML creates the registration form.
- CSS styles the form and confirmation page.
- JavaScript/jQuery checks the phone number and confirmation checkbox.
- PHP validates submitted data on the server and safely escapes output.
- On successful submission, submit.php displays the entered details.

NOTE:
This is a demonstration project. It displays submitted details but does not save them
to a database or email them. Do not use real sensitive personal information in a
public demo. Add database storage, CSRF protection, and stronger production security
before using it for actual registrations.
