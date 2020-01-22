Components from login php system.
----------------------------------------

1. Mysql webcontrol database --> users table.
   -->  users table contains fields: | userid | , | username | , | password |
    
      !!! IMPORTANT: PASSWORD FIELD TYPE NEED BE: MD5 TYPE !!!
    
2. Login.php connect to mysql users database.

3. connection.php have function to connect database (call this function from file in login.php)

4. logout.php from logout when you are logged.
