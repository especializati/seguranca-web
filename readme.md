# Curso de Segurança em Aplicações Web (com PHP)

## SQL Injection
Usar PDO corretamente

## XSS
usar a função do PHP **htmlentities**

## CSRF
Usar um captcha ou token no formulário
```sh
curl -X POST http://localhost:8891/sql_injection_fixed.php \
     -H "Content-Type: application/x-www-form-urlencoded" \
     -d "email=example@example.com&password=securepassword"
```

## Outros
 - arquivo com infos das configs (phpinfo)
 - versão desatualizada da linguagem (php)
 - pacotes desatualizados
 - nenhuma técnica para multiplas requests
 - Pegar dados da request sem higienizar ($_GET $_POST e etc)
 - Criptografia !== de Hash
    - Criptografar dados sensíveis
 - Frameworks, eles ajudam sim!!!
 - use https (roubo de cookies)
   - Cloudflare
 - não estourar exceptions com dados sensíveis
 - não deixar dados sensíveis expostos no servidor (.env, .sql, .log)
 - usar senhas fortes
 - document root em um nível diferente do código