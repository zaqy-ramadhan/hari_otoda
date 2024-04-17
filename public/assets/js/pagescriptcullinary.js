/*document.addEventListener("DOMContentLoaded", function () {
const itemsPerPageC = 9; // Number of items per page
        let currentPageC = 1; // Current page
        

        // Function to generate a single culinary card
        function generateCulinaryCard(culinary) {
            const imgSrc = culinary.culinaryFiles.length > 0 ? culinary.culinaryFiles[0].link : 'default-image-url.jpg';

            return `
                <div class="custom-hotel-container">
                    <div class= "custom-card-hotel">
                        <img src="${imgSrc}" class="custom-hotel-img" alt="${culinary.name}">
                    </div>
                    <div class="custom-hotel-content">
                        <h5 class="card-title" style="font-weight: bold">${culinary.name}</h5>
                        <p class="card-text">${culinary.address}</p>
                        <button class="custom-btn-hotel custom-btn-primary" onclick="showLocation('${culinary.name}', ${culinary.latitude}, ${culinary.longitude})">Show Location</button>
                    </div>
                </div>
            `;
        }

        // Function to render culinary cards for the current page
        function renderCulinaryCardsForCurrentPage(culinaryData) {
            const culinaryContainer = document.getElementById("culinaryCardContainer");
            culinaryContainer.innerHTML = "";

            for (let i = 0; i < culinaryData.length; i++) {
                const culinaryCard = generateCulinaryCard(culinaryData[i]);
                culinaryContainer.innerHTML += culinaryCard;
            }
        }

        // Function to fetch culinary data for a specific page
        async function fetchCulinaryData(pageUrl) {
            try {
                const response = await fetch(pageUrl);
                const data = await response.json();

                if (data && Array.isArray(data.data.data)) {
                    renderCulinaryCardsForCurrentPage(data.data.data); // Render culinary cards for the current page
                    renderPagination(data.data); // Render pagination
                } else {
                    console.log('Data is not in the expected format.');
                }
            } catch (error) {
                console.error('Error fetching data:', error);
            }
        }

        // Function to render pagination
        function renderPagination(paginationData) {
            const paginationContainer = document.getElementById("pagination");
            paginationContainer.innerHTML = "";

            if (paginationData && paginationData.links && paginationData.links.length > 0) {
                paginationData.links.forEach((link) => {
                    const pageLink = document.createElement("a");
                    pageLink.href = link.url;
                    pageLink.textContent = link.label;
                    pageLink.addEventListener("click", (event) => {
                        event.preventDefault();
                        fetchCulinaryData(link.url);
                    });
                    paginationContainer.appendChild(pageLink);
                });
            }
        }

        // Function to show the location on a map
        function showLocation(name, latitude, longitude) {
            const locationUrl = `https://www.google.com/maps?q=${latitude},${longitude}`;
            window.open(locationUrl, "_blank");
        }

        // Initial load of culinary data
        fetchCulinaryData("https://tourism.surabaya.go.id/api/kominfo/culinary?page=1");
    });*/