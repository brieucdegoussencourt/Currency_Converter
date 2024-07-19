// The primary goal of ajax.js is to handle the form submission using AJAX (Asynchronous JavaScript and XML) in order to send the form data to the server without reloading the entire page.

//This enhances the user experience by providing a smoother and faster interaction, 
//as it allows for partial page updates and immediate feedback without a full page refresh.

// Here are the key objectives of ajax.js:

// 	1.	Prevent Default Form Submission:
// 	•	It prevents the traditional form submission which would cause a page reload.
// 	2.	Asynchronous Request Handling:
// 	•	It sends the form data to the server asynchronously using a GET request, allowing the user to continue interacting with the page while the request is being processed.
// 	3.	Form Data Serialization:
// 	•	It serializes the form data, converting it into a format suitable for sending as a query string in the GET request.
// 	4.	Dynamic Content Update:
// 	•	It handles the server’s response and updates a specific part of the web page (e.g., a div element with an ID of result) with the returned data without reloading the entire page.
// 	5.	User Experience Improvement:
// 	•	It improves the user experience by providing immediate feedback and reducing wait times associated with full page reloads.

// HERE IS THE CODE

//Ensures that the script runs only after the DOM is fully loaded.
$(document).ready(function() {
    // List of currencies (you can expand this list as needed)
    const currencies = ["USD", "EUR", "GBP", "JPY", "AUD", "CAD"];

    // Populate the currency dropdowns
    const fromSelect = $('#from');
    const toSelect = $('#to');
    currencies.forEach(currency => {
        fromSelect.append(new Option(currency, currency));
        toSelect.append(new Option(currency, currency));
    });

    // Attach a submit event handler to the form
    $('#converterForm').on('submit', function(event) {
        event.preventDefault();

        // Send AJAX request
        $.ajax({
            url: 'form_converter.php',
            type: 'GET',
            data: $(this).serialize(),
            success: function(response) {
                // Display the result
                $('#result').val(response);
            }
        });
    });

    // Switch currencies button functionality
    $('#switchBtn').on('click', function() {
        let fromCurrency = $('#from').val();
        let toCurrency = $('#to').val();
        $('#from').val(toCurrency);
        $('#to').val(fromCurrency);
    });
});


