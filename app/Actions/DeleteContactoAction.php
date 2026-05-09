<?php

namespace App\Actions;

use App\Models\Contacto;

class DeleteContactoAction
{
    /**
     * Ejecuta la acción de eliminar un contacto
     *
     * @param Contacto $contacto
     * @return bool|null
     */
    public function execute(Contacto $contacto): ?bool
    {
        return $contacto->delete();
    }
}
