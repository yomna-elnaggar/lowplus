



<script src="{{ asset('dashboard/js/vendor-all.min.js') }}"></script>
    <script src="{{ asset('dashboard/js/pcoded.min.js') }}"></script>
    <!-- Include jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-rc.0/js/select2.min.js"></script>
    <!-- form-select-custom Js -->
    <script src="{{ asset('dashboard/js/form-select-custom.js') }}"></script>
</body>

</html>

@yield('footer')

<script>
function setDirection(lang) {
    const htmlElement = document.querySelector('html');
    if (lang === 'ar') {
        htmlElement.setAttribute('dir', 'rtl');
    } else {
        htmlElement.setAttribute('dir', 'ltr');
    }
}
</script>

<script>
// JavaScript to toggle navigation menu on mobile
document.getElementById('toggleNavButton').addEventListener('click', function() {
    var nav = document.querySelector('.pcoded-navbar');
    nav.classList.toggle('show-nav');
});

// JavaScript to hide navigation menu when any nav-link is clicked
var navLinks = document.querySelectorAll('.nav-link');
navLinks.forEach(function(navLink) {
    navLink.addEventListener('click', function() {
        var nav = document.querySelector('.pcoded-navbar');
        nav.classList.remove('show-nav');
    });
});
</script>

<script>
document.querySelectorAll('.route-btn').forEach(function(button) {
    button.addEventListener('click', function() {
        // Remove 'active-route' class from all buttons
        document.querySelectorAll('.route-btn').forEach(function(btn) {
            btn.classList.remove('active-route');
        });
        // Add 'active-route' class to the clicked button
        this.classList.add('active-route');
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Get the "select all" checkbox
    const selectAllCheckbox = document.getElementById("selectAllCheckbox");

    // Get all checkboxes in the table body
    const checkboxes = document.querySelectorAll("tbody .checkall[type='checkbox']");

    // Add event listener to the "select all" checkbox
    selectAllCheckbox.addEventListener("change", function() {
        checkboxes.forEach(function(checkbox) {
            // Set the state of each checkbox to match the "select all" checkbox
            checkbox.checked = selectAllCheckbox.checked;
        });
    });

    // Add event listener to each checkbox in the table body
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener("change", function() {
            // If any checkbox is unchecked, uncheck the "select all" checkbox
            if (!this.checked) {
                selectAllCheckbox.checked = false;
            }
        });
    });
});
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const toggleButton = document.getElementById("toggleButton");
    const content = document.querySelector(".content-grid");
    const collapseLinks = document.querySelectorAll('.collapseLink');
    let isOpen = false;

    toggleButton.addEventListener("click", function() {
        content.classList.toggle("toggle-grid");
        if (isOpen) {
            collapseLinks.forEach(link => {
                link.setAttribute('data-bs-toggle', 'collapse');
            });
        } else {
            collapseLinks.forEach(link => {
                link.removeAttribute('data-bs-toggle');
            });
        }
        isOpen = !isOpen;
    });
});
</script>

<script>
function hide() {
    var element = document.getElementById("navbarNavAltMarkup");
    element.classList.remove("show");
}
</script>

<script>
function isMobileScreen() {
    return window.innerWidth <= 991;
}

document.getElementById('toggleButton-nav').addEventListener('click', function() {
    if (isMobileScreen()) {
        let sidebar = document.getElementById('sidebar');
        let computedStyle = window.getComputedStyle(sidebar);

        if (computedStyle.display === "none") {
            sidebar.style.display = "block";
        } else {
            sidebar.style.display = "none";
        }
    }
});

document.body.addEventListener('click', function(event) {
    if (isMobileScreen()) {
        let sidebar = document.getElementById('sidebar');
        let toggleButton = document.getElementById('toggleButton-nav');

        if (!sidebar.contains(event.target) && event.target !== toggleButton && !toggleButton.contains(event
                .target)) {
            sidebar.style.display = "none";
        }

        if (event.target.classList.contains('side-links') || event.target.classList.contains('coll-links') ||
            event.target.classList.contains('close-sidebar')) {
            sidebar.style.display = "none";
        }
    }
});
</script>