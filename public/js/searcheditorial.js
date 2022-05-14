import { search } from "./export-editorial.js";

const mysearchp = document.querySelector("#editoriales_id");
const ul_add_lip = document.querySelector("#nombre");
const myurlp = "/myurlseditorial";
const searcheditorial = new search(myurlp, mysearchp, ul_add_lip);
searcheditorial.inputsearch();