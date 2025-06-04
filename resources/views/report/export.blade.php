<x-app-layout>
    <div class="container">
        <h2>Exportar Ciudadanos y Ciudades</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
<form action="{{ route('report.send') }}" method="POST">
    @csrf
    <button type="submit">Exportar a mi correo</button>
</form>
    </div>
</x-app-layout>