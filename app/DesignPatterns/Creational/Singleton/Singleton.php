<?php

declare(strict_types=1);

namespace App\DesignPatterns\Creational\Singleton;

class Singleton
{
    /**
     *
     * A própria classe mantém uma instância estática de si mesma.
     */
    private static $instances = [];

    /**
     * 
     * A classe Singleton possui um construtor privado, 
     * o que impede a instanciação direta da classe fora dela mesma.
     */
    private function __construct()
    {
    }

    /**
     * 
     * Não deve ser clonado
     */
    protected function __clone()
    {
    }

    /**
     * 
     * Não é possível desserializar um objeto Singleton
     */
    public function __wakeup()
    {
        throw new \Exception("Não é possível desserializar.");
    }

    /**
     * 
     * A classe fornece um método estático que atua como o único ponto de acesso 
     * à instância única. Se a instância ainda não foi criada, o método a cria e a retorna. 
     * Caso contrário, ele apenas retorna a instância existente.
     */
    public static function getInstance(): Singleton
    {
        $cls = static::class;

        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }
}
