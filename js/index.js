document.getElementById("likeIcon").addEventListener("click", function() {
    this.classList.toggle("fas");
});

function toggleDropdown() {
    document.getElementById("kategoriDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function filtre_toggleDropdown() {
    document.getElementById("filtreDropdown").classList.toggle("show");
}

window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

var subcategoryLists = document.querySelectorAll('.subcategories');
subcategoryLists.forEach(function(subcategory) {
    subcategory.parentNode.addEventListener('click', function() {
        subcategory.style.display = (subcategory.style.display === 'none' || subcategory.style.display === '') ? 'block' : 'none';
    });
});