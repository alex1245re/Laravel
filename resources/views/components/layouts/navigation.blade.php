<nav style="background-color: #2c3e50; padding: 1rem; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
        <div style="display: flex; gap: 2rem; align-items: center;">
            <a href="{{ route('home') }}" style="color: white; text-decoration: none; font-size: 1.5rem; font-weight: bold;">
                📋 Agenda Laravel
            </a>
            <div style="display: flex; gap: 1rem;">
                <a href="{{ route('home') }}" style="color: white; text-decoration: none; padding: 0.5rem 1rem; border-radius: 4px; transition: background-color 0.3s;" 
                   onmouseover="this.style.backgroundColor='#34495e'" 
                   onmouseout="this.style.backgroundColor='transparent'">
                    Inicio
                </a>
                <a href="{{ route('contactos.index') }}" style="color: white; text-decoration: none; padding: 0.5rem 1rem; border-radius: 4px; transition: background-color 0.3s;" 
                   onmouseover="this.style.backgroundColor='#34495e'" 
                   onmouseout="this.style.backgroundColor='transparent'">
                    Contactos
                </a>
            </div>
        </div>
        @auth
            <div style="display: flex; gap: 1rem; align-items: center;">
                <span style="color: white;">{{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="background-color: #e74c3c; color: white; border: none; padding: 0.5rem 1rem; border-radius: 4px; cursor: pointer; transition: background-color 0.3s;"
                            onmouseover="this.style.backgroundColor='#c0392b'" 
                            onmouseout="this.style.backgroundColor='#e74c3c'">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        @else
            <div style="display: flex; gap: 1rem;">
                <a href="{{ route('login') }}" style="color: white; text-decoration: none; padding: 0.5rem 1rem; border-radius: 4px; background-color: #3498db; transition: background-color 0.3s;"
                   onmouseover="this.style.backgroundColor='#2980b9'" 
                   onmouseout="this.style.backgroundColor='#3498db'">
                    Iniciar Sesión
                </a>
                <a href="{{ route('register') }}" style="color: white; text-decoration: none; padding: 0.5rem 1rem; border-radius: 4px; background-color: #27ae60; transition: background-color 0.3s;"
                   onmouseover="this.style.backgroundColor='#229954'" 
                   onmouseout="this.style.backgroundColor='#27ae60'">
                    Registro
                </a>
            </div>
        @endauth
    </div>
</nav>
