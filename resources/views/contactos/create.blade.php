<x-layouts.app title="Crear Contacto" metaDescription="Crear un nuevo contacto en la agenda">
    <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); max-width: 600px; margin: 0 auto;">
        <h1 style="color: #2c3e50; margin-bottom: 2rem; font-size: 2rem;">Crear Nuevo Contacto</h1>

        @if($errors->any())
            <div style="background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 1rem; border-radius: 4px; margin-bottom: 1rem;">
                <strong>Errores de validación:</strong>
                <ul style="margin-top: 0.5rem; margin-left: 1.5rem;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contactos.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 1.5rem;">
                <label for="nombre" style="display: block; color: #2c3e50; margin-bottom: 0.5rem; font-weight: bold;">
                    Nombre <span style="color: #e74c3c;">*</span>
                </label>
                <input type="text" 
                       name="nombre" 
                       id="nombre" 
                       value="{{ old('nombre') }}"
                       required
                       style="width: 100%; padding: 0.75rem; border: 1px solid {{ $errors->has('nombre') ? '#e74c3c' : '#ddd' }}; border-radius: 4px; font-size: 1rem;">
                @error('nombre')
                    <span style="color: #e74c3c; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label for="apellidos" style="display: block; color: #2c3e50; margin-bottom: 0.5rem; font-weight: bold;">
                    Apellidos <span style="color: #e74c3c;">*</span>
                </label>
                <input type="text" 
                       name="apellidos" 
                       id="apellidos" 
                       value="{{ old('apellidos') }}"
                       required
                       style="width: 100%; padding: 0.75rem; border: 1px solid {{ $errors->has('apellidos') ? '#e74c3c' : '#ddd' }}; border-radius: 4px; font-size: 1rem;">
                @error('apellidos')
                    <span style="color: #e74c3c; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label for="correo" style="display: block; color: #2c3e50; margin-bottom: 0.5rem; font-weight: bold;">
                    Correo Electrónico <span style="color: #e74c3c;">*</span>
                </label>
                <input type="email" 
                       name="correo" 
                       id="correo" 
                       value="{{ old('correo') }}"
                       required
                       style="width: 100%; padding: 0.75rem; border: 1px solid {{ $errors->has('correo') ? '#e74c3c' : '#ddd' }}; border-radius: 4px; font-size: 1rem;">
                @error('correo')
                    <span style="color: #e74c3c; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label for="telefono" style="display: block; color: #2c3e50; margin-bottom: 0.5rem; font-weight: bold;">
                    Teléfono <span style="color: #e74c3c;">*</span>
                </label>
                <input type="text" 
                       name="telefono" 
                       id="telefono" 
                       value="{{ old('telefono') }}"
                       required
                       style="width: 100%; padding: 0.75rem; border: 1px solid {{ $errors->has('telefono') ? '#e74c3c' : '#ddd' }}; border-radius: 4px; font-size: 1rem;">
                @error('telefono')
                    <span style="color: #e74c3c; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <div style="margin-bottom: 1.5rem;">
                <label for="direccion" style="display: block; color: #2c3e50; margin-bottom: 0.5rem; font-weight: bold;">
                    Dirección <span style="color: #e74c3c;">*</span>
                </label>
                <textarea name="direccion" 
                          id="direccion" 
                          rows="3"
                          required
                          style="width: 100%; padding: 0.75rem; border: 1px solid {{ $errors->has('direccion') ? '#e74c3c' : '#ddd' }}; border-radius: 4px; font-size: 1rem; resize: vertical;">{{ old('direccion') }}</textarea>
                @error('direccion')
                    <span style="color: #e74c3c; font-size: 0.875rem; margin-top: 0.25rem; display: block;">{{ $message }}</span>
                @enderror
            </div>

            <div style="display: flex; gap: 1rem; justify-content: flex-end;">
                <a href="{{ route('contactos.index') }}" 
                   style="background-color: #95a5a6; color: white; padding: 0.75rem 1.5rem; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;"
                   onmouseover="this.style.backgroundColor='#7f8c8d'" 
                   onmouseout="this.style.backgroundColor='#95a5a6'">
                    Cancelar
                </a>
                <button type="submit" 
                        style="background-color: #27ae60; color: white; padding: 0.75rem 1.5rem; border: none; border-radius: 4px; cursor: pointer; font-size: 1rem; transition: background-color 0.3s;"
                        onmouseover="this.style.backgroundColor='#229954'" 
                        onmouseout="this.style.backgroundColor='#27ae60'">
                    💾 Guardar Contacto
                </button>
            </div>
        </form>
    </div>
</x-layouts.app>
