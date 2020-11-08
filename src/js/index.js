import { buscador } from "./buscadorFilter.js";
import formConfirmation from "./formConfirmation.js";

const d = document,
$formComentario = d.querySelector(".form-comentario"),
$formContacto = d.querySelector(".form-contacto");

d.addEventListener("DOMContentLoaded", (e) => {
  buscador(".buscador", ".producto");
  formConfirmation([$formContacto, $formComentario]);
});
