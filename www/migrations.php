<?php

return [
    'name' => 'Book Store Migrations',
    'migrations_namespace' => 'Werner\BookStore\Migrations',
    'table_name' => 'doctrine_migration_versions',
    'column_name' => 'version',
    'column_length' => 14,
    'executed_at_column_name' => 'executed_at',
    'migrations_directory' => 'src/Migrations',
    'all_or_nothing' => true,
    'check_database_platform' => true,
];
