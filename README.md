
 # Currency Converter

An amazing web application that allows users to convert currencies using live exchange rates.

## WHAT? WHEN? WHY?

This challenge is part of the web developer training @ [Becode](https://becode.org/fr/) - July 2024.

Today is Friday and this exercice is the first of the BACKEND track we started at the beginning of the week.

The aim of the project is to consolidate what we've learned so far and to develop our PHP skills on local server environment.

Here are the full [guidelines](/guidelines.md).


## Key Features

### Working with a Local Server Configuration (MAMP)
- **Local Development Environment**
  - Uses MAMP (Mac, Apache, MySQL, PHP) to create a local server environment for development and testing.
- **PHP Integration**
  - The `form_converter.php` file handles server-side logic and integrates with the currency conversion API.
- **Seamless Local Testing**
  - Allows for testing and debugging of PHP scripts and AJAX interactions without deploying to a live server.
- **Database Connectivity**
  - Can be extended to connect to a local MySQL database for storing historical exchange rates or user preferences.
- **Easy Configuration**
  - MAMP provides an easy-to-configure environment with a user-friendly interface to manage the Apache server and PHP settings.

### Form Handling with AJAX
- **Prevent Default Form Submission**
  - Prevents traditional form submission to avoid full page reloads.
- **Asynchronous Request Handling**
  - Sends form data to the server asynchronously using a GET request.
- **Form Data Serialization**
  - Serializes the form data for sending as a query string.
- **Dynamic Content Update**
  - Updates a specific part of the web page with the server's response.
- **User Experience Improvement**
  - Provides immediate feedback and reduces wait times.

### Technologies Used
- **HTML5**
  - Structured and semantic markup.
- **CSS3**
  - Custom styles for a polished look.
  - Google Fonts for beautiful typography.
- **JavaScript/jQuery**
  - DOM manipulation and AJAX requests.
  - Dynamic form handling.
- **PHP**
  - Server-side logic and handling (form_converter.php).
- **API Integration**
  - Uses a live currency conversion API for real-time exchange rates.

## Screenshot

<img src="/assets/Screenshot%202024-07-19%20at%2016.25.06.png" alt="Currency Converter Screenshot" width="300">

## Files

- **index.html**
  - The main HTML file containing the structure of the currency converter.
- **style.css**
  - The CSS file for styling the currency converter.
- **ajax.js**
  - The JavaScript file for handling AJAX requests and dynamic updates.
- **form_converter.php**
  - The PHP file for handling server-side logic.

## Developer Notes

- The form dynamically populates currency options and sets default values for a better user experience.
- Includes functionality to switch between currencies and reset the form with predefined values.

## How to Use

1. **Open the `index.html` file** in a web browser.
2. **Enter the amount** you want to convert.
3. **Select the currencies** from the dropdowns.
4. **Click 'Submit'** to get the conversion result without reloading the page.
5. **Use the 'Switch' button** to swap the 'from' and 'to' currencies.
6. **Click 'Reset'** to reset the form to default values.

## AUTHOR

**Brieuc Degoussencourt** - [GitHub](https://github.com/brieucdegoussencourt)