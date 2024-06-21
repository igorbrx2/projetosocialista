// configurar backend usando Node.js e Express

const express = require('express');
const bodyParser = require('body-parser');
const app = express();
const port = 3000;

app.use(bodyParser.json());

app.post('/submit', (req, res) => {
  const { nomeCompleto, profissao, whatsapp } = req.body;
  console.log(`Nome Completo: ${nomeCompleto}, Profissão: ${profissao}, Whatsapp: ${whatsapp}`);
  res.json({ message: 'Dados recebidos com sucesso!' });
});

app.listen(port, () => {
  console.log(`Servidor rodando em http://localhost:${port}`);
});