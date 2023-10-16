// Function to toggle the sidebar open and closed
function toggleSidebar() {
    // Get references to the sidebar and the sidebar button
    var sidebar = document.getElementById("sidebar");
    var sidebarButton = document.querySelector(".sidebar-button");

    // Check the current state of the sidebar
    if (sidebar.style.right === "0px") {
        // If the sidebar is open, close it
        sidebar.style.right = "-250px"; // Move offscreen to the right
        sidebarButton.style.display = "block"; // Display the sidebar button
    } else {
        // If the sidebar is closed, open it
        sidebar.style.right = "0px"; // Slide in from the right
        sidebarButton.style.display = "none"; // Hide the sidebar button
    }
}
