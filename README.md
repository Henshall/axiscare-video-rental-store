# Project Setup Guide

This guide will walk you through setting up the PHP project. Follow the steps below to get your development environment up and running.

## Prerequisites

Before you begin, ensure you have the following installed on your system:
- PHP (version 7.4 or higher)
- A web server (e.g., Apache, Nginx) or the PHP built-in server
- Composer (optional, but recommended for dependency management)

## Setup Instructions

1. **Clone the Repository**

    Clone the repository to your local machine:

    ```sh
    git clone <repository-url>
    cd <repository-directory>
    ```

2. **Move to the Project Directory**

    Ensure you are in the project directory:

    ```sh
    cd project-root
    ```

3. **Start the PHP Built-in Server**

    To serve the application using the PHP built-in server, run the following command:

    ```sh
    php -S localhost:8000 -t public
    ```

4. **Access the Routes**

    Open your web browser and access the following routes:

      - `http://localhost:8000/` to see the plain-text statement.
      - `http://localhost:8000/statement/plain` to see the plain-text statement.
      - `http://localhost:8000/statement/html` to see the HTML statement.
      - `http://localhost:8000/statement/plain-text-and-html` to see both the plain-text and HTML statements.

By following these steps, you can ensure that your application is correctly set up.
