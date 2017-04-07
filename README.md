# Todo App

This is a To-do list application that uses PHP's PDO methods to connect to a MySQL server and retrieves tasks that were submitted by users. The purpose of this project is to become adept at PHP and its RESTful methodology in operating a MySQL server. The front end will use Twitter's Bootstrap library with JQuery mixed in. It will be an ugly site, but it will be glorious.



Design inspiration from:
- Any.do
- Wunderlist
- iOS Reminders App

List of Bower packages:

`bower install angular angular-ui-router bootstrap jquery`

---
Important Notes and Things I Learned on the Way:
- PDO is far superior to MySQLi
  - in `new PDO('mysql:hostname;dbname;charset', 'username', 'password')`, make sure to include `charset=utf8mb4` in first parameter, for security reasons
  - if getting `Uncaught exception 'PDOException' with message 'SQLSTATE[HY000] [2002] No such file or directory' in ...`, use the localhost port (127.0.0.1) instead of "localhost" as hostname

- if using boolean, make sure to insert boolean data as int (0 or 1) rather than true or false

