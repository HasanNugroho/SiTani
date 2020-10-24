function ajax(element) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("root").innerHTML = this.responseText;
        }
    };
    xhr.open("GET", "js/components/dashboard/" + element + ".blade.php", true);
    xhr.send();
}

window.onload = function () {
    ajax("home");
};
let target;

document.getElementById("sidebar-side").addEventListener("click", (e) => {
    e.preventDefault();
    target = e.target.id;
    switch (target) {
        case "home":
            ajax("home");
            break;
        case "user":
            var app = new Vue({
                el: "#app",
                data: {
                    users: [],
                },
                mounted() {
                    this.loadData();
                },
                methods: {
                    loadData: function () {
                        axios
                            .get("http://127.0.0.1:8000/getuser")
                            .then((res) => {
                                if (res.status == 200) {
                                    this.users = res.data;
                                    var datax = res.data;
                                    const a = (() => {
                                        for (let i = 0; i < datax.length; i++) {
                                            console.log();
                                        }
                                    });


                                    document.getElementById("root").html = `    
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>{{$user->name}}</td>
                                    <td>Otto</td>
                                    <td>
                                      <a href="/edit/{{1}}" class="btn btn-outline-primary btn-sm">Edit Admin</a>
                                      <a href="/hapus/{{id}}" class="btn btn-outline-danger btn-sm">Hapus</a>
                                    </td>
                                  </tr>`;
                                }
                            })
                            .catch((err) => {
                                console.log(err);
                            });
                    },
                },
            });
            // console.log(app);
            break;
        case "pertanian":
            ajax("tani");
            break;
        case "kebun":
            ajax("kebun");
            break;
        case "tanggapan":
            ajax("tanggapan");
            break;
        case "kelas":
            ajax("kelas");
            break;
    }
});
