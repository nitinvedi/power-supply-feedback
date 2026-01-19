# PowerFeedback - Campus Energy Management System

A full-stack web application designed for managing and submitting feedback regarding power supply and energy issues on campus. This system facilitates communication between users and administrators to ensure efficient resolution of power-related concerns.

## Features

-   **User Authentication**:
    -   Secure Login and Signup functionality.
    -   **Google Login** integration for quick access.
    -   Role-based access control (User vs Admin).
-   **Admin Dashboard**: Dedicated interface for administrators to manage feedback and users.
-   **Feedback & Contact**:
    -   Contact form for submitting inquiries and feedback.
    -   Email notifications for new submissions.
-   **Responsive Design**: Built with Tailwind CSS for a modern, mobile-friendly interface.
-   **Informational Pages**: About Us, FAQs, and Terms & Conditions.

## Tech Stack

-   **Frontend**: HTML5, JavaScript, [Tailwind CSS](https://tailwindcss.com/) (via CDN), [Lucide Icons](https://lucide.dev/).
-   **Backend**: PHP.
-   **Database**: MySQL.
-   **Dependencies**: Google API Client (via Composer).

## Prerequisites

Ensure you have the following installed on your local machine:

-   [PHP](https://www.php.net/downloads)
-   [MySQL](https://dev.mysql.com/downloads/installer/)
-   [Composer](https://getcomposer.org/download/)

## Setup & Installation

1.  **Clone the Repository**
    ```bash
    git clone <repository-url>
    cd power-supply-feedback
    ```

2.  **Install Dependencies**
    Run the following command to install the required PHP libraries (including Google API Client):
    ```bash
    composer install
    ```

3.  **Database Configuration**
    -   Create a MySQL database named `feedback_system`.
    -   Import the database schema (if provided as `.sql` file) or set up the `users` table manually.
    -   Open `config/database.php` and verify your database credentials:
        ```php
        $host = "localhost";
        $user = "root";      // Update if different
        $password = "";      // Update if you have a password
        $db = "feedback_system";
        ```

4.  **Google Login Setup** (Optional)
    -   Configure your Google Cloud Console project.
    -   Update `auth/google-login.php` and `auth/google-callback.php` with your Client ID and Client Secret (or ensure `keys.php` is present in the root).

5.  **Run the Application**
    You can use the built-in PHP server for local development:
    ```bash
    php -S localhost:8000
    ```
    Open your browser and navigate to `http://localhost:8000`.

## Folder Structure

-   `assets/`: Images, videos, and scripts.
-   `config/`: Configuration files (e.g., database connection).
-   `auth/`: Authentication scripts (Login, Logout, Google Auth).
-   `admin/`: Admin dashboard and related files.
-   `vendor/`: Composer dependencies.
-   `*.php`: Public pages (Home, About, Contact, FAQ).

## Usage

-   **Home**: Landing page with project overview (`index.php`).
-   **Login**: Access for Users (`auth/login.php`) and Admins (`admin/login.php`).
-   **Dashboard**: Admin management interface (`admin/dashboard.php`).
-   **Contact**: Form to reach out to the management team.
