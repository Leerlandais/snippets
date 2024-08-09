document.addEventListener("DOMContentLoaded", function () {
    // Handle outer dropdowns
    const optionsWithDropdown = document.querySelectorAll(".option-with-dropdown");
    optionsWithDropdown.forEach(function (option) {
        option.addEventListener("click", function () {
            const dropdown = option.querySelector(".dropdown");
            dropdown.classList.toggle("hidden");
        });
    });

    // Handle inner dropdowns
    const optionsWithDropdownInner = document.querySelectorAll(".option-with-dropdown-inner");
    optionsWithDropdownInner.forEach(function (option) {
        option.addEventListener("click", function (event) {
            // Prevent the click from closing the outer dropdown
            event.stopPropagation();

            const dropdownInner = option.querySelector(".dropdown-inner");
            dropdownInner.classList.toggle("hidden");
        });
    });

}); // end doc Ready