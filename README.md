# SQL injection challenge

This challenge is about **⁠⁠⁠web application security**⁠⁠⁠. The clue in this challenge is hidden in a web application, and not accessible through normal use of the application, so you'll need to hack it.

**⁠⁠SQL injection attacks**⁠⁠⁠ (SQLi) are used by hackers to bypass authentication, read sensitive data, or modify the information in a database. This can occur whenever unsanitized user input is part of an SQL query and could allow the attacker to change, or insert additional SQL statements into the code. It is one of the most severe risks to modern web applications, has been **⁠ranked the #1 risk by OWASP** since 2010 and **⁠⁠⁠constitutes over 44% of the web application attacks**⁠⁠⁠ recorded by Akamai in Q2 2016.

This website is vulnerable to SQLi, and you are granted permission to attack the application in order to retrieve the clue. **⁠⁠⁠The challenge is to bypass the login and find the clue**⁠⁠⁠ by using the search field that is shown when you are authenticated. You will have to use common SQLi tricks such as `⁠⁠⁠⁠' OR 1=1`⁠⁠⁠⁠ and merge datasets with `⁠⁠⁠⁠UNION`⁠⁠⁠⁠. When you are logged in you need to find a way to get a list of all tables in the database and finally get data from the table which seems to include the most interesting data.

## Solution
The solution to this challenge can be found in [SOLUTION.md](SOLUTION.md).

## Secure version
A secure version of this website can be found in the subfolder [secure](secure/). That version is not vulnerable to SQLi.

The difference between the secure and the insecure versions of the website can be found [here](https://github.com/netlight/security-challenge/commit/87bd0d6fa68332065a88dc14865bb8c00eb4abf4).

## Setup
1. Setup a server with PHP and MySQL support.

2. Run [db/security_challenge.sql](db/security_challenge.sql) to create the MySQL database with all the necessary data inserted into the tables. A database user that only is allowed to do ﻿⁠⁠⁠⁠`SELECT`﻿⁠⁠⁠⁠ queries is also created.
