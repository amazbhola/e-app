# Getting Started with Google Keep App

    git clone https://github.com/amazbhola/e-app.git

## Then

    git checkout Google_Keep_#8

## Available Scripts

    composer update
    npm install
    npm update

-- Rename .env.example file
-- Create Database

# Then

    php artisan migrate
    php artisan key:generate

## Open phpmyadmin - create database e-app

Then - import database file with data in e-app/mysqldatabase/e-app.sql

## Then

    php artisan serve
    npm run dev
