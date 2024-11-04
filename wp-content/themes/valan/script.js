function performSearch() {
    const query = document.getElementById('searchInput').value;
    if (query) {
        // Redirect to a search results page, or perform search logic
        console.log("Searching for:", query);
        // For demonstration purposes, we'll log the search query.
        // Replace with your search logic or redirect URL.
        // Example: window.location.href = `/search?query=${query}`;
    } else {
        alert("Please enter a search term.");
    }
}
