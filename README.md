# 🧼 JSON-RPC Client

## Requirements

* PHP 7.2+
* Composer
* Yarn
* JSON-RPC Server — https://github.com/ossipov/jsonrpc-client

## Installation 

```
git clone https://github.com/ossipov/jsonrpc-client.git
cd jsonrpc-client
composer install
cp .env.example .env
php artisan key:generate
```

Edit `.env`. You may change URI to JSON-RPC server and set connection TOKEN.
Or you may leave it as is. This setup should work for default installation.
```
JSONRPC_SERVER_URI=http://127.0.0.1:8001/api/jsonrpc
JSONRPC_SERVER_TOKEN=TOKEN
```

Now just run local server
```
php artisan serve
```

If port 8000 is not busy by some other proccess client should be availabe at http://127.0.0.1:8000
