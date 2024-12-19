document.addEventListener('DOMContentLoaded', () => {
    const searchButton = document.getElementById('search-button');
    const cancelButton = document.getElementById('cancel-search');
    const searchContainer = document.getElementById('search-container');
    const searchInput = document.getElementById('search-input');
    const mainHeader = document.querySelector('.main-header');
    const searchTermsContainer = document.querySelector('.search-terms');

   

    function openSearch() {
        searchContainer.classList.add('open');
        mainHeader.style.opacity = '0';
        document.body.style.overflow = 'hidden';
        searchInput.focus();
    }

    function closeSearch() {
        searchContainer.classList.remove('open');
        mainHeader.style.opacity = '1';
        document.body.style.overflow = '';
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

    // Initialize Lucide icons
    lucide.createIcons();
});

