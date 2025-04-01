
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.querySelector("form");

        form.addEventListener("submit", function(event) {
            var firstName = document.getElementById("username").value.trim();
            var email = document.getElementById("email").value.trim();
            var password = document.getElementById("password").value.trim();
            var confirmPassword = document.getElementById("pass").value.trim();
            var mobileNumber = document.getElementById("mobno").value.trim();
            var genderMale = document.getElementById("male").checked;
            var genderFemale = document.getElementById("female").checked;

            // Validation for required fields
            if (firstName === "" || email === "" || password === "" || confirmPassword === "" || mobileNumber === "") {
                alert("Please fill in all required fields.");
                event.preventDefault(); // Prevent form submission
                return;
            }

            // Validation for email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert("Please enter a valid email address.");
                event.preventDefault();
                return;
            }

            // Validation for password length
            if (password.length < 6) {
                alert("Password must be at least 6 characters long.");
                event.preventDefault();
                return;
            }

            // Validation for password match
            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                event.preventDefault();
                return;
            }

            // Validation for mobile number
            var mobileRegex = /^\d{10}$/;
            if (!mobileRegex.test(mobileNumber)) {
                alert("Please enter a valid 10-digit mobile number.");
                event.preventDefault();
                return;
            }

            // Validation for gender selection
            if (!genderMale && !genderFemale) {
                alert("Please select a gender.");
                event.preventDefault();
                return;
            }
        });
    });

