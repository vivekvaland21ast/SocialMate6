document.addEventListener("DOMContentLoaded", function () {
    const editProfileButtons = document.querySelectorAll(".view-btn");

    editProfileButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            const userId = this.getAttribute("data-user-id");
            // Redirect to /friend with the user ID as a query parameter
            window.location.href = "/friend?user_id=" + userId;
        });
    });
});

