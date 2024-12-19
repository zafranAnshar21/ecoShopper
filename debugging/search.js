document.addEventListener('DOMContentLoaded', () => {
    const searchButton = document.getElementById('search-button');
    const cancelButton = document.getElementById('cancel-search');
    const searchContainer = document.getElementById('search-container');
    const searchInput = document.getElementById('search-input');
    const searchTermsContainer = document.querySelector('.search-terms');

    const popularSearches = [
        'Eco-friendly',
        'Organic',
        'Sustainable',
        'Recycled',
        'Vegan',
        'Zero waste',
        'Natural',
        'Biodegradable'
    ];

    function openSearch() {
        searchContainer.classList.add('open');
        searchInput.focus();
    }

    function closeSearch() {
        searchContainer.classList.remove('open');
    }

    searchButton.addEventListener('click', openSearch);
    cancelButton.addEventListener('click', closeSearch);

    // Populate popular search terms
    popularSearches.forEach(term => {
        const button = document.createElement('button');
        button.classList.add('search-term');
        button.textContent = term;
        searchTermsContainer.appendChild(button);
    });
});