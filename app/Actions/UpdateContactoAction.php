<?php

namespace App\Actions;

use App\Models\Contacto;

class UpdateContactoAction
{
    /**
     * Ejecuta la acción de actualizar un contacto
     *
     * @param Contacto $contacto
     * @param array $data
     * @return Contacto
     */
    public function execute(Contacto $contacto, array $data): Contacto
    {
        $contacto->update($data);
        return $contacto;
    }
}
