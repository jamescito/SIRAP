import { search } from "./consulta.js";

const mysearchp = document.querySelector("#libro_id");
const ul_add_lip = document.querySelector("#nombre");
const myurlp = "/autocompletelibro";
const searchprestamos = new search(myurlp, mysearchp, ul_add_lip);
searchprestamos.inputsearch();