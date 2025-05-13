document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.querySelector(".menu-toggle");
    const menu = document.querySelector(".menu");

    // Menü aç/kapat işlemi
    menuToggle.addEventListener("click", () => {
        menu.classList.toggle("active");
    });

    // Logo tıklamasıyla sayfayı yenile
    const logo = document.getElementById("refresh-logo");
    logo.addEventListener("click", (e) => {
        e.preventDefault(); 
        window.location.reload(); 
    });
});
