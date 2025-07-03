# PHP Crash Course - Joonguini Programming in the Kitchen

## What is PHP?

PHP (Hypertext Preprocessor) is a popular server-side scripting language designed for web development. It was created by Rasmus Lerdorf in 1994 and is now maintained by The PHP Group. PHP is embedded within HTML code and executed on the server, generating dynamic web content.

### Key Features of PHP:
- **Server-side scripting**: Runs on the web server, not in the browser
- **Cross-platform**: Works on Windows, macOS, Linux, and Unix systems
- **Database integration**: Easy integration with MySQL, PostgreSQL, and other databases
- **Open source**: Free to use and modify
- **Large community**: Extensive documentation and community support
- **Easy to learn**: Simple syntax similar to C and Java

### What PHP Can Do:
- Generate dynamic page content
- Create, open, read, write, delete, and close files on the server
- Collect form data
- Send and receive cookies
- Add, delete, modify data in your database
- Control user-access
- Encrypt data
- Output images, PDF files, and even Flash movies

## How to Use PHP

### Basic PHP Syntax:
```php
<?php
// PHP code goes here
echo "Hello World!";
?>
```

### PHP Tags:
- `<?php ?>` - Standard PHP tags
- `<?= ?>` - Short echo tags (for outputting values)
- `<? ?>` - Short tags (not recommended, may be disabled)

### Running PHP Files:
1. **Web Server Required**: PHP files must be run through a web server (like Apache)
2. **File Extension**: Save files with `.php` extension
3. **Access via Browser**: Navigate to `http://localhost/your-file.php`

## XAMPP Installation Guide

### What is XAMPP?
XAMPP is a free and open-source cross-platform web server solution stack package developed by Apache Friends. It includes:
- **Apache** - Web server
- **MySQL** - Database server
- **PHP** - Server-side scripting language
- **Perl** - Programming language

### Step-by-Step Installation:

#### Step 1: Download XAMPP
1. Go to [https://www.apachefriends.org/](https://www.apachefriends.org/)
2. Click "Download" for your operating system
3. Choose the version with PHP 8.x (latest stable)

#### Step 2: Install XAMPP
**Windows:**
1. Run the downloaded `.exe` file
2. Click "Next" through the installation wizard
3. Choose installation directory (default: `C:\xampp`)
4. Complete the installation

**macOS:**
1. Open the downloaded `.dmg` file
2. Drag XAMPP to Applications folder
3. Open XAMPP from Applications

**Linux:**
1. Make the downloaded file executable: `chmod +x xampp-linux-*-installer.run`
2. Run the installer: `./xampp-linux-*-installer.run`
3. Follow the installation prompts

#### Step 3: Start XAMPP
1. Open XAMPP Control Panel
2. Start Apache and MySQL services
3. Verify both services show green status

#### Step 4: Test Installation
1. Open your web browser
2. Navigate to `http://localhost`
3. You should see the XAMPP welcome page

## How to Use XAMPP with PHP Files

### Step 1: Place Your PHP Files
1. Navigate to XAMPP installation directory
2. Go to `htdocs` folder
3. Create a new folder for your project (e.g., `php-crash-course`)
4. Copy all your PHP files into this folder

### Step 2: Access Your Files
1. Open your web browser
2. Navigate to `http://localhost/php-crash-course/`
3. Click on any PHP file to run it

### Step 3: File Structure Example
```
C:\xampp\htdocs\php-crash-course\
├── 01_output.php
├── 02_variables.php
├── 03_arrays.php
├── ... (all other PHP files)
└── readme.md
```

### Step 4: Troubleshooting
- **Port 80 in use**: Change Apache port in XAMPP Control Panel
- **Permission denied**: Run XAMPP as administrator
- **Files not loading**: Check file permissions and paths

## Course Files Overview

This course includes the following PHP files demonstrating different concepts:

1. **01_output.php** - Basic output functions (echo, print, print_r, var_dump)
2. **02_variables.php** - Variable declaration and data types
3. **03_arrays.php** - Array creation and manipulation
4. **04_conditionals.php** - If statements and conditional logic
5. **05_loops.php** - For, while, and foreach loops
6. **06_functions.php** - Function definition and usage
7. **07_array_functions.php** - Built-in array functions
8. **08_string_functions.php** - String manipulation functions
9. **09_superglobals.php** - PHP superglobal variables
10. **10_get_post.php** - Handling GET and POST requests
11. **11_sanitizing_inputs.php** - Input validation and sanitization
12. **12_cookies.php** - Working with cookies
13. **13_sessions.php** - Session management
14. **14_file_handling.php** - File operations (read, write, append)
15. **15_file_upload.php** - File upload functionality
16. **16_exceptions.php** - Error handling with try-catch
17. **17_oop.php** - Object-Oriented Programming basics

## Getting Started

1. Install XAMPP following the steps above
2. Copy all PHP files to `C:\xampp\htdocs\php-crash-course\`
3. Start Apache in XAMPP Control Panel
4. Open `http://localhost/php-crash-course/01_output.php`
5. Work through each file in numerical order
6. Experiment with the code and modify examples

## Additional Resources

- [PHP Official Documentation](https://www.php.net/docs.php)
- [W3Schools PHP Tutorial](https://www.w3schools.com/php/)
- [PHP.net Manual](https://www.php.net/manual/en/)
- [Stack Overflow PHP Tag](https://stackoverflow.com/questions/tagged/php)

---

**Happy Coding! - Joonguini Programming in the Kitchen**