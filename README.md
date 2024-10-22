# Set up
1. Use [netmatters.sql](netmatters.sql) to create DB tables
2. Add entries to ```news_posts``` table
3. Copy [.env.example](.env.example) to .env and change DB connection details

```env
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=username
DB_PASSWORD=password
```
4. Run ```composer install```
5. Point document root to /public folder
