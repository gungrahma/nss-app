document.addEventListener("DOMContentLoaded", () => {
    const text = "Nightshot Syndicate";
    const speed = 100;
    let i = 0;
    const target = document.getElementById("Typewritter");

    function typeWriter() {
        if (i < text.length) {
            target.innerHTML += text.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }

    setTimeout(typeWriter, 500);

    const pages = document.querySelectorAll(".page");

    pages.forEach((page, index) => {
        // Atur tumpukan halaman awal (Halaman 1 paling atas di kanan)
        page.style.zIndex = pages.length - index;

        page.addEventListener("click", function () {
            // Waktu tunggu animasi (800ms) menyesuaikan dengan durasi CSS (1s)
            const animationDelay = 800;

            if (this.classList.contains("flipped")) {
                // --- KONDISI: Menutup halaman (Flip ke Kanan) ---
                this.classList.remove("flipped");

                // 1. Angkat kertas ke paling atas agar tidak menabrak halaman lain saat melayang
                this.style.zIndex = pages.length + 10;

                // 2. Kembalikan ke urutan aslinya di tumpukan kanan setelah mendarat
                setTimeout(() => {
                    this.style.zIndex = pages.length - index;
                }, animationDelay);
            } else {
                // --- KONDISI: Membuka halaman (Flip ke Kiri) ---
                this.classList.add("flipped");

                // 1. Angkat kertas ke paling atas agar melayang mulus
                this.style.zIndex = pages.length + 10;

                // 2. Turunkan ke tumpukan kiri setelah selesai melayang
                setTimeout(() => {
                    this.style.zIndex = index + 1;
                }, animationDelay);
            }
        });
    });

    const yearSpan = document.getElementById("year");
    if (yearSpan) {
        yearSpan.textContent = new Date().getFullYear();
    }

    const themeToggle = document.getElementById("theme-toggle");
    const savedTheme = localStorage.getItem("theme");

    if (savedTheme) {
        document.documentElement.setAttribute("data-theme", savedTheme);
        updateThemeIcon(savedTheme);
    }

    if (themeToggle) {
        themeToggle.addEventListener("click", () => {
            const currentTheme =
                document.documentElement.getAttribute("data-theme");
            const newTheme = currentTheme === "dark" ? "light" : "dark";

            document.documentElement.setAttribute("data-theme", newTheme);
            localStorage.setItem("theme", newTheme);
            updateThemeIcon(newTheme);
        });
    }

    function updateThemeIcon(theme) {
        const sunIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>`;
        const moonIcon = `<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>`;

        if (themeToggle) {
            themeToggle.innerHTML = theme === "dark" ? sunIcon : moonIcon;
        }
    }

    if (!savedTheme) {
        updateThemeIcon("light");
    }

    const menuToggle = document.getElementById("menu-toggle");
    const navLinks = document.querySelector(".nav-links");

    if (menuToggle && navLinks) {
        menuToggle.addEventListener("click", () => {
            navLinks.classList.toggle("active");
            menuToggle.classList.toggle("active");
        });

        navLinks.querySelectorAll("a").forEach((link) => {
            link.addEventListener("click", () => {
                navLinks.classList.remove("active");
                menuToggle.classList.remove("active");
            });
        });
    }
});
