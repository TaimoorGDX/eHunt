// Wait for the DOM to be fully loaded before running the script
document.addEventListener("DOMContentLoaded", function () {
    // Mobile menu toggle
    const menuToggle = document.querySelector(".menu-toggle");
    const mainMenu = document.querySelector(".main-menu nav");

    if (menuToggle && mainMenu) {
        menuToggle.addEventListener("click", function () {
            mainMenu.classList.toggle("active");
        });
    }

    // Sidebar toggles
    const sidebarToggles = document.querySelectorAll(
        ".open-side, .open-side-14, .open-side-1a"
    );

    sidebarToggles.forEach((toggle) => {
        toggle.addEventListener("click", function () {
            const content = this.previousElementSibling;
            content.style.display =
                content.style.display === "none" ? "block" : "none";
        });
    });

    // Search functionality
    const searchInput = document.getElementById("search-products");
    const productItems = document.querySelectorAll(".frame-37");

    if (searchInput) {
        searchInput.addEventListener("input", function () {
            const searchTerm = this.value.toLowerCase();

            productItems.forEach((item) => {
                const productName = item
                    .querySelector(
                        ".product-name-product-name-product-name-product-name"
                    )
                    .textContent.toLowerCase();
                item.style.display = productName.includes(searchTerm)
                    ? "block"
                    : "none";
            });
        });
    }

    // Select all checkbox functionality
    const selectAllCheckbox = document.getElementById("select-all");
    const productCheckboxes = document.querySelectorAll(
        '.main-check-3a input[type="checkbox"]'
    );

    if (selectAllCheckbox) {
        selectAllCheckbox.addEventListener("change", function () {
            productCheckboxes.forEach((checkbox) => {
                checkbox.checked = this.checked;
            });
        });
    }

    // Responsive table
    function makeTableResponsive() {
        const tableHeaders = document.querySelectorAll(".frame-24 > div");
        const tableRows = document.querySelectorAll(".frame-37");

        if (window.innerWidth < 768) {
            tableRows.forEach((row) => {
                const cells = row.querySelectorAll('div[class^="frame-"]');
                cells.forEach((cell, index) => {
                    const header = tableHeaders[index].textContent.trim();
                    cell.setAttribute("data-label", header);
                });
            });
        } else {
            tableRows.forEach((row) => {
                const cells = row.querySelectorAll('div[class^="frame-"]');
                cells.forEach((cell) => {
                    cell.removeAttribute("data-label");
                });
            });
        }
    }

    // Call the function initially and on window resize
    makeTableResponsive();
    window.addEventListener("resize", makeTableResponsive);

    // Pagination functionality (simplified)
    const paginationContainer = document.querySelector(".pagination");
    const productList = document.querySelector(".products-list");
    const itemsPerPage = 10;
    let currentPage = 1;

    function updatePagination() {
        const totalItems = productItems.length;
        const totalPages = Math.ceil(totalItems / itemsPerPage);

        paginationContainer.innerHTML = "";

        for (let i = 1; i <= totalPages; i++) {
            const pageButton = document.createElement("button");
            pageButton.textContent = i;
            pageButton.addEventListener("click", () => changePage(i));
            paginationContainer.appendChild(pageButton);
        }

        showPage(currentPage);
    }

    function showPage(page) {
        const startIndex = (page - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;

        productItems.forEach((item, index) => {
            item.style.display =
                index >= startIndex && index < endIndex ? "block" : "none";
        });

        currentPage = page;
    }

    function changePage(page) {
        showPage(page);
    }

    // Initialize pagination
    updatePagination();
});
