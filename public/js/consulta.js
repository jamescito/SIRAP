export class search {
    constructor(myurlp, mysearchp, ul_add_lip) {
        this.url = myurlp;
        this.titulo = mysearchp;
        this.ul_add_li = ul_add_lip;
        this.idli = "autocompletelibro";
        this.pcantidad = document.querySelector("#pcantidad");
    }

    inputsearch() {
        this.titulo.addEventListener("input", (e) => {
            e.preventDefault();
            try {
                let token = document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content");
                let minimo_letra = 0;
                let valor = this.titulo.value;
                //console.log(valor);
                if (valor.length > minimo_letra) {
                    let datasearch = new FormData();
                    datasearch.append("valor", valor);
                    fetch(this.url, {
                        headers: {
                            "X-CSRF-TOKEN": token,
                        },
                        method: "post",
                        body: datasearch,
                    })
                        .then((data) => data.json())
                        .then((data) => {
                            console.log(data);
                            this.showlist(data, valor);
                        })
                        .catch(function (error) {
                            console.error("error:", error);
                        });
                } else {
                    this.ul_add_li.style.display = "";
                }
            } catch (error) {
                console.log(error);
            }
        });
    }

    showlist(data, valor) {
        this.ul_add_li.style.display = "block";
        console.log(data.estado);
        if (data.estado == 1) {
            if (data.result != "") {
                let arrayp = data.result;
                this.ul_add_li.innerHTML = "";
                let n = 0;
                console.log("entro a buscar");
                this.show_list_each_data(arrayp, valor, n);
                let adclasli = document.getElementById("1" + this.idli);
                adclasli.classList.add("selected");
            } else {
                console.log("no entro a buscar");
                this.ul_add_li.innerHTML = "";
                this.ul_add_li.innerHTML += `
                <p style="color:red;"><br>No se encontró</p>
                `;
            }
        }
    }

    show_list_each_data(arrayp, valor, n) {
        for (let item of arrayp) {
            n++;
            let titulo = item.titulo;
            console.log(item.titulo);
            this.ul_add_li.innerHTML += `

            <li style="" id="${n + this.idli}" value="${item.libro_id}" >
                <div style="width:auto; padding:10px; border-radius:10px; background:white;">
                    <div style="width:100%">
                            <strong style="font-size:25px">Título: ${titulo.substr(0, valor.length)}</strong>
                            ${titulo.substr(valor.length)}
                        <p style="font-size:25px" class="card-text" id="librodisponible">Cantidad de libros disponibles:
                        <span style="color:red; font-size:28px; font-weight:bold;">${item.librodisponible}</span></p>
                    </div>
                </div>
            </li>
            `;
        }
    }
}
