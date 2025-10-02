# Atividade Mega Sena

Projeto em **PHP puro** que simula uma loja de apostas para a Mega Sena, com interface web para login, seleção de apostas e finalização. Os resultados das apostas são armazenados como arquivos de texto.

---

## 🚀 Funcionalidades

- Página de login / autenticação (simples)  
- Página da “loja” para o usuário inserir os números da aposta  
- Finalização da aposta  
- Geração / validação dos números da aposta  
- Armazenamento de apostas em arquivos `.txt`  
- Interface web com CSS para estilização  

---

## 📁 Estrutura de Arquivos (versão atual)
```
AtividadeMegaSena/
├── imagens/ ← imagens usadas no site
├── apostas/ (arquivos .txt) ← apostas salvas
├── index.php ← página inicial / ponto de entrada
├── login.php
├── loja.php
├── finalizar.php
├── style.css
├── login.css
├── loja.css
└── finalizar.css
```
---

## 🛠 Requisitos / Ambiente

- PHP 7.x ou superior  
- Servidor web (Apache, Nginx ou similar)  
- Permissão de escrita no diretório `apostas/` para salvar os arquivos `.txt`  

---

## 📦 Instalação / Uso

1. Clone este repositório:

   ```bash
   git clone https://github.com/KalebeMenezesMj/AtividadeMegaSena.git
   ```
2. Configure o servidor para apontar para o diretório (ou use o index.php diretamente).

3. Garanta que a pasta apostas/ seja gravável (chmod 755 ou 775 conforme ambiente).

4. Acesse no navegador (ex: http://localhost/AtividadeMegaSena/index.php)

5. Faça login (ou acesse diretamente a loja), insira os números da aposta e finalize.
    
---

---

## 👥 Colaboradores

- **Kalebe Menezes**  
  GitHub: [@KalebeMenezesMj](https://github.com/KalebeMenezesMj)

- **Gustavo Lemos**  
  GitHub: [@GustavoInCode24](https://github.com/GustavoInCode24)


