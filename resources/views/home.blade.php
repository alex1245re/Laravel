<x-layouts.app title="Inicio - Agenda Laravel" metaDescription="Bienvenido a la aplicación de gestión de contactos">
    <div style="text-align: center; padding: 3rem 1rem;">
        <h1 style="font-size: 2.5rem; color: #2c3e50; margin-bottom: 1rem;">
            Bienvenido a Agenda Laravel
        </h1>
        <p style="font-size: 1.2rem; color: #7f8c8d; margin-bottom: 2rem;">
            Sistema de gestión de contactos desarrollado con Laravel 13
        </p>
        
        <div style="display: flex; justify-content: center; gap: 2rem; margin-top: 3rem; flex-wrap: wrap;">
            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); width: 300px;">
                <h2 style="color: #3498db; margin-bottom: 1rem;">📋 Contactos</h2>
                <p style="color: #7f8c8d; margin-bottom: 1.5rem;">
                    Gestiona tu lista de contactos de forma sencilla
                </p>
                <a href="{{ route('contactos.index') }}" 
                   style="display: inline-block; background-color: #3498db; color: white; padding: 0.75rem 1.5rem; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;"
                   onmouseover="this.style.backgroundColor='#2980b9'" 
                   onmouseout="this.style.backgroundColor='#3498db'">
                    Ver Contactos
                </a>
            </div>

            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); width: 300px;">
                <h2 style="color: #27ae60; margin-bottom: 1rem;">➕ Nuevo Contacto</h2>
                <p style="color: #7f8c8d; margin-bottom: 1.5rem;">
                    Añade un nuevo contacto a tu agenda
                </p>
                <a href="{{ route('contactos.create') }}" 
                   style="display: inline-block; background-color: #27ae60; color: white; padding: 0.75rem 1.5rem; text-decoration: none; border-radius: 4px; transition: background-color 0.3s;"
                   onmouseover="this.style.backgroundColor='#229954'" 
                   onmouseout="this.style.backgroundColor='#27ae60'">
                    Crear Contacto
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>
