import { search } from "./export_search.js";

const mysearchp = document.querySelector("#estudiante_id");
const ul_add_lip = document.querySelector("#nombre");
const myurlp = "/myurl";
const searchprestamos = new search(myurlp, mysearchp, ul_add_lip);
searchprestamos.inputsearch();