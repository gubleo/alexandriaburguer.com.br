const scriptURL = 'https://hook.us1.make.com/pix75pqnznthnx9ktwtsxe181vpmjqo9'

const form = document.forms['formulario']

form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => console.log("Obrigado! seu formulário foi enviado com sucesso.")/*alert("Obrigado! seu formulário foi enviado com sucesso.")*/)
  .then(() => { 
    window.location.href = "https://alexandriaburgerfranquia.com.br/obrigado.html";// window.location.reload();
   })
  .catch(error => console.error('Error!', error.message))
})