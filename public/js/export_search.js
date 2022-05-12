export class search {

    constructor(myurlp, mysearchp, ul_add_lip) {
        this.url = myurlp;
        this.codigoCarnet = mysearchp;
        this.ul_add_li = ul_add_lip;
        this.idli = "mylist";
        this.pcantidad = document.querySelector("#pcantidad");

    }

    inputsearch() {
        this.codigoCarnet.addEventListener("input", (e) => {
            e.preventDefault();
            try {
                let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
                let minimo_letra = 0;
                let valor = this.codigoCarnet.value;
                //console.log(valor);
                if (valor.length > minimo_letra) {
                    let datasearch = new FormData();
                    datasearch.append("valor", valor);
                    fetch(this.url, {
                            headers: {
                                "X-CSRF-TOKEN": token,
                            },
                            method: "post",
                            body: datasearch
                        })
                        .then((data) => data.json())
                        .then((data) => {
                            console.log(data)
                            this.showlist(data, valor);
                        })
                        .catch(function(error) {
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
        console.log(data.estado)
        if (data.estado == 1) {
            if (data.result != "") {
                let arrayp = data.result;
                this.ul_add_li.innerHTML = "";
                let n = 0;
                console.log("entro a buscar");
                this.show_list_each_data(arrayp, valor, n);
                let adclasli = document.getElementById('1' + this.idli);
                adclasli.classList.add('selected');
            } else {
                console.log("no entro a buscar");
                this.ul_add_li.innerHTML = "";
                this.ul_add_li.innerHTML += `
                <p style="color:red;"><br>No se encontro</p>
                `;
            }
        }

    }





    show_list_each_data(arrayp, valor, n) {
        for (let item of arrayp) {
            n++;
            let nombre = item.nombre;
            console.log(item.nombre)
            this.ul_add_li.innerHTML += `

            <li id="${n+this.idli}" value="${item.estudiante_id}" >
            <div class="d-flex flex-row" style="">
            <div class="p-2 text-center divimg" style="">
            </div>
            <div class="p-2">
                    <strong>${nombre.substr(0,valor.length)}</strong>
                    ${nombre.substr(valor.length)}
                    <p class="card-text"> ${item.apellido}</p>
                    <p id="secreativo" class="card-text"> ${item.codigoCarnet}</p>
                    <button id="btn" class="bg-yellow-400" onclick="miAlerta()">selecccionar</button>
            </div>
            </div>
            </li>
            `;


        }
    }

}