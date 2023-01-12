# WebDevelopment_MiniProject_UserAuthentication_PHP

The main function of this application:
  1. This application allows user to create a database which contains a table named users offers the information of users. In order to create the database, run type Lab09.sql | mysql -u root -p conmand under the sql folder.
  The database screenshot:
  <img width="916" alt="image" src="https://user-images.githubusercontent.com/93168873/212151713-8e8b1803-601b-44de-bd00-143e81d8a20d.png">
  2. The default page prompts user to input the login credential. You can get the registered user's user name in the database, the password is identical to the username. The password will convert to hash and compare the real password in the users table. If both input match, the user will be lead to the next page, and the session will be kept. Otherwise, the user will be redirect to login page again.
  <img width="602" alt="image" src="https://user-images.githubusercontent.com/93168873/212151985-89c42570-f9c4-4d37-827b-b3ace6c10eea.png">
  3. AS long as the user login successfully, the corresponding user information will be fetch from database and display on the page.
  <img width="634" alt="image" src="https://user-images.githubusercontent.com/93168873/212152632-0e39a390-d0a5-4c07-92dc-ac41c7b706ff.png">
  4. User can log out by click the log out button, then the page will redirect to the goodbye page.
  <img width="632" alt="image" src="https://user-images.githubusercontent.com/93168873/212152941-c9af3d5f-b156-4954-84b9-dbaf5af26b5d.png">
  5. The user can redirect to login page again buy click "login again" button.
 
Key techs used in this application:
  1. MySQL database management.
  2. PHP PDO.
  3. PHP class and opject.
  4. Password verify and hash.
  5. PHP session management.
