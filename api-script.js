document.addEventListener("DOMContentLoaded", function() {
    const container = document.getElementById('film-container');
    
    // BURAYI DEĞİŞTİR: Kendi istediğin filmlerin isimlerini buraya yaz
    const favoriFilmlerim = [
        'Inception', 
        'The Dark Knight', 
        'Interstellar', 
        'The Matrix'
    ];

    container.innerHTML = ''; // Yükleniyor yazısını temizle

    favoriFilmlerim.forEach(filmAdi => {
        // Her film için API'ye tek tek istek atıyoruz
        fetch(`https://api.tvmaze.com/singlebreach/shows?q=${filmAdi}`)
        .then(response => response.json())
        .then(show => {
            // Bootstrap kart yapısı
            container.innerHTML += `
                <div class="col-md-3 mb-4">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="${show.image ? show.image.medium : 'https://via.placeholder.com/210x295'}" class="card-img-top" alt="${show.name}">
                        <div class="card-body text-center">
                            <h6 class="card-title fw-bold">${show.name}</h6>
                            <p class="card-text small text-muted">${show.genres[0] || 'Film'}</p>
                            <span class="badge bg-warning text-dark">Puan: ${show.rating.average || '8.0'}</span>
                        </div>
                    </div>
                </div>`;
        })
        .catch(err => console.log(filmAdi + " bulunamadı."));
    });
});