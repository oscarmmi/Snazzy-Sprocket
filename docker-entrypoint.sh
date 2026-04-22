#!/bin/bash
set -e

echo "⏳ Waiting for MySQL to be ready..."
until mysqladmin ping -h "$WORDPRESS_DB_HOST" -u root -p"$MYSQL_ROOT_PASSWORD" --silent 2>/dev/null; do
  echo "MySQL not ready yet... retrying in 3s"
  sleep 3
done

echo "✅ MySQL is ready!"

# Check if the database is empty (no tables)
TABLE_COUNT=$(mysql -h "$WORDPRESS_DB_HOST" -u "$WORDPRESS_DB_USER" -p"$WORDPRESS_DB_PASSWORD" "$WORDPRESS_DB_NAME" \
  -e "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = '$WORDPRESS_DB_NAME';" -sN 2>/dev/null)

if [ "$TABLE_COUNT" = "0" ] || [ -z "$TABLE_COUNT" ]; then
  echo "📦 Database is empty. Importing init.sql..."
  mysql -h "$WORDPRESS_DB_HOST" -u "$WORDPRESS_DB_USER" -p"$WORDPRESS_DB_PASSWORD" "$WORDPRESS_DB_NAME" < /docker-entrypoint-initdb.d/init.sql
  echo "✅ Database imported successfully!"
else
  echo "ℹ️ Database already has data ($TABLE_COUNT tables). Skipping import."
fi

# Run the original WordPress entrypoint
exec docker-entrypoint.sh apache2-foreground
