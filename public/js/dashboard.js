

function ajax(element){
     var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("root").innerHTML = this.responseText;
            }
        };
        xhr.open("GET", 'js/components/dashboard/'+element+'.blade.php', true);
        xhr.send();
}

window.onload = function () {
    ajax('home')
};
let target;


document.getElementById("sidebar-side").addEventListener("click", (e) => {

    
    e.preventDefault();
    target = e.target.id;
    switch (target) {
        case "home":
            ajax('home')
            break;
        case "user":
            ajax('user')
            break;
        case "pertanian":
            ajax('tani')
            break;
        case "kebun":
            ajax('kebun')
            break;
        case "tanggapan":
            ajax('tanggapan')
            break;
        case "kelas":
            ajax('kelas')
            break;
    }
});
