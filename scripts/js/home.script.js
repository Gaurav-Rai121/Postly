function toggleDropdown() {
    const dropdown = document.getElementById('dropdownMenu');
    dropdown.classList.toggle('hidden');
}

// Close dropdown when clicking outside
window.addEventListener('click', function(e) {
    const dropdown = document.getElementById('dropdownMenu');
    if (!e.target.closest('button') && !dropdown.classList.contains('hidden')) {
        dropdown.classList.add('hidden');
    }
});

function toggleDropdown() {
    const dropdown = document.querySelectorAll('#dropdownMenu').forEach((menu) => {
        menu.classList.toggle('hidden');
    })

}