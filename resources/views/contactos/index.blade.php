<x-layouts.app title="Listado de Contactos" metaDescription="Listado completo de contactos registrados">
    <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h1 style="color: #2c3e50; font-size: 2rem;">Listado de Contactos</h1>
            <a href="{{ route('contactos.create') }}" 
               style="background-color: #27ae60; color: white; padding: 0.75rem 1.5rem; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;"
               onmouseover="this.style.backgroundColor='#229954'" 
               onmouseout="this.style.backgroundColor='#27ae60'">
                ➕ Nuevo Contacto
            </a>
        </div>

        @forelse($contactos as $contacto)
            <div style="border: 1px solid #ddd; padding: 1.5rem; margin-bottom: 1rem; border-radius: 4px; transition: box-shadow 0.3s;"
                 onmouseover="this.style.boxShadow='0 4px 12px rgba(0,0,0,0.1)'" 
                 onmouseout="this.style.boxShadow='none'">
                <div style="display: flex; justify-content: space-between; align-items: start;">
                    <div style="flex: 1;">
                        <h3 style="color: #2c3e50; margin-bottom: 0.5rem; font-size: 1.3rem;">
                            {{ $contacto->nombre }} {{ $contacto->apellidos }}
                        </h3>
                        <p style="color: #7f8c8d; margin-bottom: 0.25rem;">
                            <strong>📧 Email:</strong> {{ $contacto->correo }}
                        </p>
                        <p style="color: #7f8c8d; margin-bottom: 0.25rem;">
                            <strong>📞 Teléfono:</strong> {{ $contacto->telefono }}
                        </p>
                        <p style="color: #7f8c8d;">
                            <strong>📍 Dirección:</strong> {{ $contacto->direccion }}
                        </p>
                    </div>
                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                        <a href="{{ route('contactos.show', $contacto) }}" 
                           style="background-color: #3498db; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 4px; font-size: 0.9rem; transition: background-color 0.3s;"
                           onmouseover="this.style.backgroundColor='#2980b9'" 
                           onmouseout="this.style.backgroundColor='#3498db'">
                            👁️ Ver
                        </a>
                        <a href="{{ route('contactos.edit', $contacto) }}" 
                           style="background-color: #f39c12; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 4px; font-size: 0.9rem; transition: background-color 0.3s;"
                           onmouseover="this.style.backgroundColor='#e67e22'" 
                           onmouseout="this.style.backgroundColor='#f39c12'">
                            ✏️ Editar
                        </a>
                        <form action="{{ route('contactos.destroy', $contacto) }}" method="POST" style="display: inline;"
                              onsubmit="return confirm('¿Estás seguro de eliminar este contacto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    style="background-color: #e74c3c; color: white; padding: 0.5rem 1rem; border: none; border-radius: 4px; cursor: pointer; font-size: 0.9rem; transition: background-color 0.3s;"
                                    onmouseover="this.style.backgroundColor='#c0392b'" 
                                    onmouseout="this.style.backgroundColor='#e74c3c'">
                                🗑️ Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div style="text-align: center; padding: 3rem; color: #7f8c8d;">
                <p style="font-size: 1.2rem; margin-bottom: 1rem;">No hay contactos registrados</p>
                <a href="{{ route('contactos.create') }}" 
                   style="background-color: #27ae60; color: white; padding: 0.75rem 1.5rem; text-decoration: none; border-radius: 4px; display: inline-block; transition: background-color 0.3s;"
                   onmouseover="this.style.backgroundColor='#229954'" 
                   onmouseout="this.style.backgroundColor='#27ae60'">
                    Crear el primer contacto
                </a>
            </div>
        @endforelse
    </div>
</x-layouts.app>
