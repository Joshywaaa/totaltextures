// Function to toggle the sidebar open and closed
function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    var sidebarButton = document.querySelector(".sidebar-button");

    if (sidebar.style.right === "0px") {
        sidebar.style.right = "-250px"; // Move offscreen to the right
        sidebarButton.style.display = "block";
    } else {
        sidebar.style.right = "0px"; // Slide in from the right
        sidebarButton.style.display = "none";
    }
}
