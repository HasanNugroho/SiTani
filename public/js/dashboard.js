import { home } from "./components/dashboard/home.js";
import { user } from "./components/dashboard/user.js";
import { tani } from "./components/dashboard/tani.js";
import { kebun } from "./components/dashboard/kebun.js";
import { tanggapan } from "./components/dashboard/tanggapan.js";
import { kelas } from "./components/dashboard/kelas.js";

window.onload = function () {
    const root = document.getElementById("root");
    root.innerHTML = home;
};
let target;
document.getElementById("sidebar-side").addEventListener("click", (e) => {
    e.preventDefault();
    target = e.target.id;
    switch (target) {
        case "home":
            document.getElementById("root").innerHTML = home;
            break;
        case "user":
            document.getElementById("root").innerHTML = user;
            break;
        case "pertanian":
            document.getElementById("root").innerHTML = tani;
            break;
        case "kebun":
            document.getElementById("root").innerHTML = kebun;
            break;
        case "tanggapan":
            document.getElementById("root").innerHTML = tanggapan;
            break;
        case "kelas":
            document.getElementById("root").innerHTML = kelas;
            break;
    }
});
