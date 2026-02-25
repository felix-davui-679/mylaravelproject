# Task Manager App

A simple, elegant Task Manager application built with Laravel 12 and PostgreSQL.

## Features

- ✅ Create tasks with title and description
- ✅ View all tasks in a clean, organized list
- ✅ Edit existing tasks
- ✅ Delete tasks
- ✅ Mark tasks as completed/incomplete with a checkbox
- ✅ Form validation for task inputs
- ✅ Flash messages for user feedback
- ✅ Responsive UI with Tailwind CSS

## Tech Stack

- **Framework**: Laravel 12
- **Database**: PostgreSQL
- **Frontend**: Blade Templates + Tailwind CSS
- **Language**: PHP 8.5

## Project Structure

```
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── TaskController.php       # CRUD operations
│   └── Models/
│       └── Task.php                     # Task model (eloquent)
├── database/
│   └── migrations/
│       └── *_create_tasks_table.php     # Tasks table schema
├── resources/views/
│   ├── layout.blade.php                 # Base layout with navigation
│   └── tasks/
│       ├── index.blade.php              # List all tasks
│       ├── create.blade.php             # Create task form
│       └── edit.blade.php               # Edit task form
├── routes/
│   └── web.php                          # All routes (RESTful)
└── config/
    └── database.php                     # Database configuration
```

## Installation

1. Clone the repository:
```bash
git clone https://github.com/felix-davui-679/mylaravelproject.git
cd mylaravelproject
```

2. Install dependencies:
```bash
composer install
```

3. Copy environment file:
```bash
cp .env.example .env
```

4. Generate app key:
```bash
php artisan key:generate
```

5. Configure database in `.env` (it's best to create a dedicated database for this project):
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=taskmanager_db   # create this database using pgAdmin or psql
DB_USERNAME=postgres
DB_PASSWORD=postgres123
```

6. Run migrations:
```bash
php artisan migrate
```

7. Start the development server:
```bash
php artisan serve
```

Visit `http://localhost:8000/tasks` in your browser.

## API Routes

| Method | Route | Action |
|--------|-------|--------|
| GET | `/tasks` | View all tasks |
| GET | `/tasks/create` | Show create form |
| POST | `/tasks` | Store new task |
| GET | `/tasks/{id}/edit` | Show edit form |
| PUT | `/tasks/{id}` | Update task |
| DELETE | `/tasks/{id}` | Delete task |
| PATCH | `/tasks/{id}/toggle` | Toggle completion status |

## Database Schema

**Table: tasks**

| Column | Type | Notes |
|--------|------|-------|
| id | BIGINT | Primary key |
| title | VARCHAR(255) | Required, task name |
| description | TEXT | Optional, detailed description |
| completed | BOOLEAN | Default: false |
| created_at | TIMESTAMP | Auto-generated |
| updated_at | TIMESTAMP | Auto-generated |

## Validation Rules

- **Title**: Required, max 255 characters
- **Description**: Optional, text only
- **Completed**: Boolean value

## Learning Outcomes

This project practices:
- ✅ RESTful routing in Laravel
- ✅ Resource controllers (index, create, store, edit, update, destroy)
- ✅ Eloquent ORM and model relationships
- ✅ Database migrations and schema design
- ✅ Blade templating and view inheritance
- ✅ Form handling and submission
- ✅ Input validation and error handling
- ✅ Tailwind CSS for styling
- ✅ PostgreSQL database integration

## License

This project is open source and available under the MIT License.

## Author

[Felix Davui](https://github.com/felix-davui-679)
