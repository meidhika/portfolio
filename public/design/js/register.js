const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;


nextBtnFirst.addEventListener("click", function (event) {
    event.preventDefault();

    // Ambil semua input pada langkah pertama
    const firstStepInputs = document.querySelectorAll(".slide-page .form-step input");


    // Cek validasi untuk semua input di langkah pertama, berhenti jika menemukan input yang tidak valid
    for (let input of firstStepInputs) {
        if (!input.checkValidity()) {
            input.reportValidity();  // Menampilkan pesan validasi jika tidak valid
            return;  // Hentikan eksekusi jika ada input yang tidak valid
        }
    }
    // Jika semua input valid, lanjutkan ke langkah berikutnya
    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
});

submitBtn.addEventListener("click", function () {
    const secondStepInputs = document.querySelectorAll(" .form-step input");
    for (let input of secondStepInputs) {
        if (!input.checkValidity()) {
            input.reportValidity();  // Menampilkan pesan validasi jika tidak valid
            return;  // Hentikan eksekusi jika ada input yang tidak valid
        }

    }
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;

});

prevBtnSec.addEventListener("click", function (event) {
    event.preventDefault();
    slidePage.style.marginLeft = "0%";
    bullet[current - 2].classList.remove("active");
    progressCheck[current - 2].classList.remove("active");
    progressText[current - 2].classList.remove("active");
    current -= 1;
});
