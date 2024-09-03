const scriptURL = 'https://script.google.com/macros/s/AKfycbykgR7aFBS-pF0RWocoXNYs3VZqH5UVXS5aHtwkOFCLpbmJs7EcwPy9E0UH7c_KZWtRNw/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Obrigado! seu formulário foi enviado com sucesso." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})