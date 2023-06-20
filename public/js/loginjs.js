const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});
//

// const sign_in_btn = document.querySelector("#sign-in-btn");
// const sign_up_btn = document.querySelector("#sign-up-btn");
// const container = document.querySelector(".container");

// sign_up_btn.addEventListener("click", () => {
//     // Membuka halaman signup/index.blade.php di jendela/Tab baru
//     window.open("../register/..", " ");
// });

// sign_in_btn.addEventListener("click", () => {
//     // Membuka halaman login/index.blade.php di jendela/Tab baru
//     // container.classList.remove("sign-up-mode");
//     window.open("../login/.", " ");
// });
// // Menghapus kelas "sign-up-mode" dari elemen kontainer saat memuat halaman
// window.addEventListener("load", () => {
//     container.classList.remove("sign-up-mode");
// });
//
// const sign_in_btn = document.querySelector("#sign-in-btn");
// const sign_up_btn = document.querySelector("#sign-up-btn");
// const container = document.querySelector(".container");

// sign_up_btn.addEventListener("click", () => {
//     // Membuka halaman signup/index.blade.php di jendela/Tab baru
//     window.open("../register/index.blade.php", " ");
// });

// sign_in_btn.addEventListener("click", () => {
//     // Membuka halaman login/index.blade.php di jendela/Tab baru
//     // container.classList.remove("sign-up-mode");
//     window.open("../login/index.blade.php", " ");
// });

// // Menghapus kelas "sign-up-mode" dari elemen kontainer saat memuat halaman
// window.addEventListener("load", () => {
//     container.classList.remove("sign-up-mode");
// });
