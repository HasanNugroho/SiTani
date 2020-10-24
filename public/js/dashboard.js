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
              
                   let tb = ((e)=>{
                      for (let i = 0; i < datax.length; i++) {
                          return `  <tr>
                          <th scope="row">1</th>
                          <td>`+datax[i].name+`</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                        </tr>`
                          
                      }
                   })
                console.log(tb())
                  document.getElementById('root').innerHTML=`
                  
                                <h2 class="mt-4 container-fluid">User</h2>

                                <div class="col-md text-right container-fluid my-3">
                                    <a href="/register" class="btn btn-success btn-md">Tambah Admin</a>
                                </div>
                                <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                              `+tb()+`
                                </thead>
                                <tbody id="tbody">
                                <tr>
                                <td></td>
                                </tr>
                                </tbody>
                                </table>
                                </div>

                  `
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
