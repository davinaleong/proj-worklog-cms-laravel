<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Log Actions
    |--------------------------------------------------------------------------
    |
    | List of all possible values for the action column of Database Logs.
    | Database Logs is used to track any actions that may modify the database.
    |
    */

    'log_actions' => [
        'O' => 'Others',
        'C' => 'Create',
        'R' => 'Retrieve',
        'U' => 'Update',
        'D' => 'Delete',
        'A' => 'Auth',
        'T' => 'Transaction'
    ],

    /*
    |--------------------------------------------------------------------------
    | Database Tables
    |--------------------------------------------------------------------------
    |
    | Names of all tables in the database.
    |
    */

    'database_tables' => [
        'users' => 'Users',
        'activity_logs' => 'ActivityLogs',
        'database_logs' => 'DatabaseLogs',
        'log_actions' => 'LogActions',
        'sources' => 'Sources',
        'logs' => 'Logs',
        'log_entries' => 'LogEntries',
        'entry_items' => 'EntryItems',
        'years' => 'Years',
        'companies' => 'Companies',
        'projects' => 'Projects',
        'day_types' => 'DayTypes'
    ]

];
