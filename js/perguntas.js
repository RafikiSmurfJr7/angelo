document.addEventListener("DOMContentLoaded", function() {
    var accordions = document.querySelectorAll(".accordion");

    accordions.forEach(function(accordion) {
        accordion.addEventListener("click", function(event) {
            event.preventDefault(); // Evita o comportamento padrão de redirecionamento

            this.classList.toggle("active");
            var panel = this.nextElementSibling;

            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    });
});