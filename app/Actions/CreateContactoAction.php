<?php

namespace App\Actions;

use App\Models\Contacto;

class CreateContactoAction
{
    /**
     * Ejecuta la acción de crear un contacto
     *
     * @param array $data
     * @return Contacto
     */
    public function execute(array $data): Contacto
    {
        return Contacto::create($data);
    }
}
