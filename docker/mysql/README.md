# MySQL Docker Setup

## Starting the Database

Start the MySQL database using Docker Compose:

```bash
docker-compose up -d mysql
```

## Database Details

- **Database Name**: expense_tracker
- **Username**: expense_user
- **Password**: expense_password
- **Root Password**: root_password
- **Port**: 3306

## PHPMyAdmin Access

PHPMyAdmin is available at: http://localhost:8080

- **Server**: mysql
- **Username**: root
- **Password**: root_password

## Laravel Migration

After starting the database, run Laravel migrations:

```bash
php artisan migrate
```

## Stopping the Database

```bash
docker-compose down
```

To remove the database volume (all data will be lost):

```bash
docker-compose down -v
```