
<div class="container">
    <div class="filter-container">
        <label for="DimFilter" style="font-size: 18px; font-weight: bold;">dimension</label>   
        {{-- Le select utilise l'événement on change pour soumettre la page avec la valeur choisie --}}
        <select id="DimFilter" class="dim-select" onchange="location = this.value;">
            {{-- Option par défaut pour afficher tous les films --}}
            <option value="{{ route('dimension.index') }}">dimension</option>          
            {{-- Boucle pour afficher dynamiquement tous les genres de la BDD dans le menu --}}
            @foreach($dimensions as $dimension)
                <option value="{{ route('dimension.index', ['dimension' => $dimension]) }}" 
                    {{ request('dimension') == $dimension ? 'selected' : '' }}>
                    {{ $dimenson }}
                </option>
            @endforeach
        </select>
    </div>
</div>