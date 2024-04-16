document.addEventListener('DOMContentLoaded', function() {
    const navbarToggler = document.getElementById('navbarToggler');
    const navbarCollapse = document.getElementById('navbarNavDropdown');

    navbarToggler.addEventListener('click', function() {
        navbarCollapse.classList.toggle('show');
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const dropdownToggler = document.querySelector('.dropdown-toggle');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownToggler.addEventListener('click', function() {
        dropdownMenu.classList.toggle('show');
    });
});
function openAccountOptions() {
    document.querySelector('.overlay').style.display = 'flex';
    document.getElementById('optionWindow').style.display = 'block';
}

function closeAccountOptions() {
    document.querySelector('.overlay').style.display = 'none';
    document.getElementById('optionWindow').style.display = 'none';
}
function openSignupPersonal() {
    window.location.href = "signup.html";
}

function openSignupBusiness() {
    window.location.href = "signup-bsn.html";
}

function openLogin() {
    window.location.href = "login.html";
}