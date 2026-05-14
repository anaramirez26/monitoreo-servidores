<?php


namespace App\Clases;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

{
    protected $serverUrl;

    public function __construct($serverUrl)
    {
        $this->serverUrl = $serverUrl;
    }

    /**
     * Llama al servidor y retorna el estado interpretado.
     * @return string
     */
    public function revisarServidor()
    {
        try {
            $response = Http::get($this->serverUrl);
            if ($response->successful()) {
                return 'El servidor está funcionando correctamente.';
            } else {
                return 'El servidor responde, pero con código: ' . $response->status();
            }
        } catch (\Exception $e) {
            Log::error('Error al conectar con el servidor: ' . $e->getMessage());
            return 'No se pudo conectar al servidor: ' . $e->getMessage();
        }
    }
}

/* */