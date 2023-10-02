# Stagiaire Management System

The Stagiaire Management System is a web application built using the Laravel PHP framework. It is designed to facilitate the management of trainee records, commonly known as "Stagiaires." This project provides essential functionality for adding, editing, viewing, and deleting Stagiaire records, ensuring efficient management of trainee information.

## Features

-   **List of Stagiaires**: View a list of all Stagiaires currently in the system.

-   **Create New Stagiaire**: Add new Stagiaire records with details such as name, date of birth, gender, note, and a photo.

-   **Edit Stagiaire Information**: Update existing Stagiaire information, including name, date of birth, gender, note, and photo.

-   **View Individual Stagiaire**: Access a detailed profile page for each Stagiaire, displaying their specific information.

-   **Delete Stagiaire**: Remove Stagiaires from the system, permanently deleting their records.

## Usage

1. **Listing Stagiaires**: Upon launching the application, the "List of Stagiaires" page displays all Stagiaires currently in the system.

2. **Adding New Stagiaire**: To add a new Stagiaire, click the "Create New Stagiaire" button and fill in the required details in the form.

3. **Editing Stagiaire Information**: To edit Stagiaire details, navigate to the specific Stagiaire's profile and click the "Edit" button.

4. **Viewing Individual Stagiaire**: Click on a Stagiaire's name from the list to view their individual profile.

5. **Deleting Stagiaire**: To delete a Stagiaire, go to their profile page and click the "Delete" button.

## Requirements

-   PHP
-   Laravel Framework
-   MySQL Database

## Installation

1. Clone this repository to your local environment.
2. Configure your database settings in the `.env` file.

3. Run the following commands to set up the project:

    ```bash
    composer install
    php artisan key:generate
    php artisan migrate
    php artisan serve
    ```
