<x-layouts.app title="Ver Contacto" metaDescription="Información detallada del contacto">
    <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); max-width: 600px; margin: 0 auto;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h1 style="color: #2c3e50; font-size: 2rem;">Detalle del Contacto</h1>
            <a href="{{ route('contactos.index') }}" 
               style="background-color: #95a5a6; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 4px; font-size: 0.9rem; transition: background-color 0.3s;"
               onmouseover="this.style.backgroundColor='#7f8c8d'" 
               onmouseout="this.style.backgroundColor='#95a5a6'">
                ← Volver
            </a>
        </div>

        <div style="border: 1px solid #ecf0f1; border-radius: 4px; overflow: hidden;">
            <div style="background-color: #3498db; color: white; padding: 1rem; text-align: center;">
                <h2 style="font-size: 1.5rem; margin: 0;">
                    {{ $contacto->nombre }} {{ $contacto->apellidos }}
                </h2>
            </div>

            <div style="padding: 1.5rem;">
                <div style="margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #ecf0f1;">
                    <label style="display: block; color: #7f8c8d; font-size: 0.875rem; margin-bottom: 0.25rem;">
                        📧 Correo Electrónico
                    </label>
                    <p style="color: #2c3e50; font-size: 1.1rem; margin: 0;">
                        <a href="mailto:{{ $contacto->correo }}" style="color: #3498db; text-decoration: none;">
                            {{ $contacto->correo }}
                        </a>
                    </p>
                </div>

                <div style="margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #ecf0f1;">
                    <label style="display: block; color: #7f8c8d; font-size: 0.875rem; margin-bottom: 0.25rem;">
                        📞 Teléfono
                    </label>
                    <p style="color: #2c3e50; font-size: 1.1rem; margin: 0;">
                        <a href="tel:{{ $contacto->telefono }}" style="color: #3498db; text-decoration: none;">
                            {{ $contacto->telefono }}
                        </a>
                    </p>
                </div>

                <div style="margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #ecf0f1;">
                    <label style="display: block; color: #7f8c8d; font-size: 0.875rem; margin-bottom: 0.25rem;">
                        📍 Dirección
                    </label>
                    <p style="color: #2c3e50; font-size: 1.1rem; margin: 0;">
                        {{ $contacto->direccion }}
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px solid #ecf0f1;">
                    <div>
                        <label style="display: block; color: #7f8c8d; font-size: 0.875rem; margin-bottom: 0.25rem;">
                            📅 Creado
                        </label>
                        <p style="color: #2c3e50; font-size: 0.9rem; margin: 0;">
                            {{ $contacto->created_at->format('d/m/Y H:i') }}
                        </p>
                    </div>
                    <div>
                        <label style="display: block; color: #7f8c8d; font-size: 0.875rem; margin-bottom: 0.25rem;">
                            🔄 Actualizado
                        </label>
                        <p style="color: #2c3e50; font-size: 0.9rem; margin: 0;">
                            {{ $contacto->updated_at->format('d/m/Y H:i') }}
                        </p>
                    </div>
                </div>

                <div style="display: flex; gap: 1rem; justify-content: center; margin-top: 2rem;">
                    <a href="{{ route('contactos.edit', $contacto) }}" 
                       style="background-color: #f39c12; color: white; padding: 0.75rem 1.5rem; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;"
                       onmouseover="this.style.backgroundColor='#e67e22'" 
                       onmouseout="this.style.backgroundColor='#f39c12'">
                        ✏️ Editar
                    </a>
                    <form action="{{ route('contactos.destroy', $contacto) }}" method="POST" style="display: inline;"
                          onsubmit="return confirm('¿Estás seguro de eliminar este contacto?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                style="background-color: #e74c3c; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; transition: background-color 0.3s;"
                                onmouseover="this.style.backgroundColor='#c0392b'" 
                                onmouseout="this.style.backgroundColor='#e74c3c'">
                            🗑️ Eliminar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
