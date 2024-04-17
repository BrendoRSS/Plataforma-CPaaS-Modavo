// Retrieve the logged-in user from localStorage
const loggedInUser = localStorage.getItem("loggedInUser");

// Function to display the menu on all internal pages
function displayMenu() {
    // Check if the user is logged in
    if (loggedInUser) {
        // Code to display the menu (modify as needed)
        const menuElement = document.getElementById("menu");
        menuElement.style.display = "block";
    }
}

// Function to display the user login in the top right corner
function displayUserLogin() {
    // Check if the user is logged in
    if (loggedInUser) {
        // Code to display the user login (modify as needed)
        const userLoginElement = document.getElementById("user-login");
        userLoginElement.textContent = `Welcome, ${loggedInUser}!`;
        userLoginElement.style.display = "block";
    }
}

// Call the functions when the DOM is ready
document.addEventListener("DOMContentLoaded", function () {
    displayMenu();
    displayUserLogin();
});
