# Online Examination System

The Online Examination System is a web-based platform developed using PHP, MySQLi, HTML, and Bootstrap to facilitate online exams for students and provide administrative capabilities for managing exams and results.

## Features

### User Side
- User registration and login functionality.
- Selection of exam categories and participation in exams.
- Dynamic loading of questions using Ajax to avoid page refreshes.
- Countdown timer to display the remaining time for the exam.
- Automatic exam completion based on time or completion of all questions.
- Immediate display of exam results, including correct and incorrect answers.
- Access to past exam results and history.

### Admin Side
- Admin authentication and login system.
- User management, including blocking and unblocking users.
- Creation and management of exam categories (e.g., math, science, computer).
- Setting exam durations and details.
- Addition of multiple-choice questions with options.
- Real-time monitoring of student's exam results.
- Edit and update exam content and details.

## Technologies Used

- PHP: Backend scripting language.
- MySQLi: Database management for storing user and exam data.
- HTML: Structure and layout of web pages.
- Bootstrap: Frontend framework for responsive design.
- Ajax: Dynamic question loading without page reloads.

## Installation and Setup

1. Clone the repository: `git clone https://github.com/your-username/online-examination-system.git`
2. Import the database schema from the `database.sql` file.
3. Configure database connection in `config.php`.
4. Run the project on a local server (e.g., XAMPP, WAMP).

