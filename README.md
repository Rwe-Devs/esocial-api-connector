# Esocial-Api-Connector

Esocial-Api-Connector é uma biblioteca PHP destinada a facilitar a integração de diversos projetos com a API eSocial da RWE Sistemas.

## Como Utilizar:

### Conector:

Inicie um conector e forneça os parâmetros de URL da API e Token de Autorização (Opcional):

```php
use RweDevs\EsocialApiConnector\Esocial\EsocialConnector;

$connector = new EsocialEsocialConnector($apiUrl, $token);
```

### Body:

Para requisições `POST` e `PUT` com body, o mesmo deve ser feito a partir da DTO correspondente à requisição. Por exemplo:

```php
use RweDevs\EsocialApiConnector\DTO\LoginDTO;

$loginDTO = new LoginDTO('teste27@teste.com', '12345678');
```

### Request:

Para enviar a Request, crie um novo objeto da requisição desejada, alimente-a com a DTO caso necessário e use o método `send()` do conector para enviá-la. Exemplo:

```php
use RweDevs\EsocialApiConnector\Esocial\Requests\LoginRequest;

$login = new LoginRequest($loginDTO);
$response = $connector->send($login);
```
