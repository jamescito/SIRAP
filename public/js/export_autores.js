import { search } from "./autores.js";

const mysearchp = document.querySelector("#autoresCodigo");
const ul_add_lip = document.querySelector("#nombre");
const myurlp = "/myurls";
const searchlibro = new search(myurlp, mysearchp, ul_add_lip);
searchlibro.inputsearch();