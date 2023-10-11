
var icon = document.getElementById("icon");
var cart = document.getElementById("cart");
var home = document.getElementById("home");

icon.addEventListener("click", function () {
    isDarkTheme = document.body.classList.contains("dark-theme");
    confirmMessage = isDarkTheme ? 'Switch to Light Mode?' : 'Switch to Dark Mode?';
    userConfirmed = window.confirm(confirmMessage);

    if (userConfirmed) {
        document.body.classList.toggle("dark-theme");
        if (document.body.classList.contains("dark-theme")) {
            icon.src = "img/sun.png";
            cart.src = "img/invcart.png";
            home.style.color = 'red'; 
        } else {
            icon.src = "img/moon.png";
            cart.src = "img/cart.png"; 
            home.style.color = 'white'; 
        }
    }
});


// var burgerBar = document.getElementById("burgerbar");
// var navItems = document.querySelector(".nav-items");

// // Tambahkan event listener untuk burger bar
// burgerBar.addEventListener("click", function() {
//     // Tampilkan atau sembunyikan menu navigasi saat burger bar diklik
//     navItems.classList.toggle("show-nav");
// });

// var icon = document.getElementById("icon");
// var body = document.body;
// var nav = document.querySelector("nav");

// // Menambahkan event listener untuk mengganti gambar saat elemen dengan ID "icon" diklik
// icon.onclick = function () {
//     body.classList.toggle("dark-theme");

//     if (body.classList.contains("dark-theme")) {
//         icon.src = "img/sun.png";
//         // Aktifkan mode gelap, ubah style elemen-elemen yang diperlukan
//         body.style.backgroundColor = "#121212";
//         nav.style.backgroundColor = "#1f1f1f";
//         // Tambahkan perubahan style lainnya sesuai kebutuhan
//     } else {
//         icon.src = "img/moon.png";
//         // Matikan mode gelap, kembalikan style elemen-elemen ke asal
//         body.style.backgroundColor = "white";
//         nav.style.backgroundColor = "white";
//         // Kembalikan perubahan style lainnya ke asal sesuai kebutuhan
//     }
// };


// var icon = document.getElementById("icon");
// var cart = document.getElementById("cart");

// icon.addEventListener("click", function() {
//     const isDarkTheme = document.body.classList.contains("dark-theme");

//     // Tampilkan pesan konfirmasi menggunakan SweetAlert2
//     Swal.fire({
//         title: 'Toggle Dark Mode',
//         text: isDarkTheme ? 'Switch to Light Mode?' : 'Switch to Dark Mode?',
//         icon: 'question',
//         showCancelButton: true,
//         confirmButtonText: 'Yes',
//         cancelButtonText: 'No'
//     }).then((result) => { 
//         if (result.isConfirmed) {
//             // Jika dikonfirmasi, ubah tema dan gambar ikon
//             document.body.classList.toggle("dark-theme");
//             if (document.body.classList.contains("dark-theme")) {
//                 icon.src = "img/sun.png";
//                 cart.src = "img/invcart.png";
//             } else {
//                 icon.src = "img/moon.png";
//                 cart.src = "img/cart.png";
//             }
//         }
//     });
// });

// const icon = document.getElementById("iconn");

//         icon.addEventListener("click", function () {
//             const isDarkTheme = document.body.classList.contains("dark-theme");
            
//             // Tampilkan pesan konfirmasi menggunakan window.confirm()
//             const confirmMessage = isDarkTheme ? 'Switch to Light Mode?' : 'Switch to Dark Mode?';
//             const userConfirmed = window.confirm(confirmMessage);

//             if (userConfirmed) {
//                 // Jika dikonfirmasi, ubah tema dan gambar ikon
//                 document.body.classList.toggle("dark-theme");
//                 if (document.body.classList.contains("dark-theme")) {
//                     icon.innerHTML = '<img src="sun.png" alt="Toggle Dark Mode">';
//                 } else {
//                     icon.innerHTML = '<img src="moon.png" alt="Toggle Dark Mode">';
//                 }
//             }
//         });

//         const icon = document.getElementById("icon");
//         const cartt = document.getElementById("cart")
//         const heading = document.querySelector("h2");
//         const paragraph = document.querySelector("p");

//         icon.addEventListener("click", function () {
//             const isDarkTheme = document.body.classList.contains("dark-theme");
            
//             // Tampilkan pesan konfirmasi menggunakan window.confirm()
//             const confirmMessage = isDarkTheme ? 'Switch to Light Mode?' : 'Switch to Dark Mode?';
//             const userConfirmed = window.confirm(confirmMessage);

//             if (userConfirmed) {
//                 // Jika dikonfirmasi, ubah tema dan gaya lainnya
//                 document.body.classList.toggle("dark-theme");
//                 if (document.body.classList.contains("dark-theme")) {
//                     icon.innerHTML = '<img src="sun.png">';
//                     cartt.innerHTML = '<img src="invcart.png">';
//                     // Manipulasi CSS - Ubah ukuran font dan margin pada dark mode
//                     heading.style.fontSize = "24px";
//                     paragraph.style.margin = "10px 0";
//                 } else {
//                     icon.innerHTML = '<img src="moon.png" alt="Toggle Dark Mode">';
//                     cartt.innerHTML = '<img src="cart.png">';
//                     // Kembalikan gaya ke nilai default saat kembali ke light mode
//                     heading.style.fontSize = "";
//                     paragraph.style.margin = "";
//                 }
//             }
//         });