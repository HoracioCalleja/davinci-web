export default function formConfirmation($forms) {
  if ($forms) {
    $forms.forEach(($form) => {
      if ($form) {
        $form.addEventListener("submit", (e) => {
          alert("Se ha enviado el mensaje correctamente.");
        });
      }
    });
  }
}
