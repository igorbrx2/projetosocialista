// mostrar assinaturas do manifesto

document.getElementById('assinar-form').addEventListener('submit', function(event) {
  event.preventDefault();
  const nome = document.getElementById('nome').value;
  if (nome) {
      const lista = document.getElementById('lista-assinaturas');
      const item = document.createElement('li');
      item.textContent = nome;
      lista.appendChild(item);
      document.getElementById('nome').value = ''; // Limpa o campo de nome
  }
});

document.getElementById('ver-assinaturas').addEventListener('click', function() {
  const assinaturas = document.getElementById('assinaturas');
  if (assinaturas.classList.contains('hidden')) {
      assinaturas.classList.remove('hidden');
  } else {
      assinaturas.classList.add('hidden');
  }
});