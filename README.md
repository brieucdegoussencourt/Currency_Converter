
 # Currency Converter

An amazing web application that allows users to convert currencies using live exchange rates.

## What? When? Why?

This challenge is part of the web developer training @ [Becode](https://becode.org/fr/) - July 2024.

The aim of the project is to consolidate what we've learned so far and to develop our PHP skills on local server environment. For the purpopse of this challenge I used the MAMP environment (Mac, Apache, MySql, PHP).

Here are the full [guidelines](/guidelines.md) of the challenge.


## Live Site

Site is live [HERE](https://brieucdegoussencourt.github.io/Currency_Converter/) but as it is currently hosted on GitHub and GitHub doesn't handle PHP you can't use the converter. In order to use it you would have to run the files locally and ask me for the config.php file containing the API key.


## Key Features

### Working with a Local Server Configuration (MAMP)
- **Local Development Environment**
  - Uses `MAMP` (Mac, Apache, MySQL, PHP) to create a local server environment for development and testing.
- **PHP Integration**
  - The `form_converter.php` file handles server-side logic and integrates with the currency conversion API.
- **Seamless Local Testing**
  - Allows for testing and debugging of PHP scripts and AJAX interactions without deploying to a live server.

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
- **CSS**
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

<img src="./assets/Screenshot 2024-07-22 at 16.25.35.png" alt="Currency Converter Screenshot" width="400">

## Files

- **index.html**
  - The main HTML file containing the structure of the currency converter.
- **style.css**
  - The CSS file for styling the currency converter.
- **ajax.js**
  - The JavaScript file for handling AJAX requests and dynamic updates.
- **form_converter.php**
  - The PHP file for handling server-side logic.
- **config.php, .git ignore & .htaccess**
  - Making sure no one can access the API keys and URL stored in config.php neither from the website nor on github.

## Developer Notes

- The form dynamically populates currency options and sets default values for a better user experience.
- Includes functionality to switch between currencies and reset the form with predefined values.

## AUTHOR

**Brieuc Degoussencourt** - [GitHub](https://github.com/brieucdegoussencourt)