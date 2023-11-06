# Quote Generator
This web application generates quotes from a database. This guide will help you set it up on your server.

## Prerequisites:
- PHP server
- MySQL or compatible database server
- Git (for cloning the repository)

## Installation:
1. Clone the repository to your local machine: `git clone https://github.com/BGoodes/philosophy-quotes`.
2. Upload the repository contents to your web server's public directory (e.g., `public_html`, `www`, or `htdocs`).
3. Configure your database connection by editing the `includes/database.php` with your database details.

## Database :
You need to create a table with 3 columns:
- `quote` (text)
- `author` (text)
- `source` (text)
