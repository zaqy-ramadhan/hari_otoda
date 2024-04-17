const itemsPerPage = 9;
let currentPage = 1;
let totalItems = 0;
let hotelsData = [];

// Function to generate star rating HTML based on starNumber
function generateStarRating(starNumber) {
    let starRatingHtml = '<div class="star-rating">';
    for (let i = 0; i < starNumber; i++) {
        starRatingHtml += '<span class="star full-star">&#9733;</span>';
    }
    return starRatingHtml + "</div>";
}

{/* <div class="star-rating">
${starRatingHtml}
</div> */}

// Function to generate a single hotel card
function generateHotelCard(hotel) {
    const imgSrc =
        hotel.hotelFiles.length > 0 ?
        hotel.hotelFiles[0].link :
        "default-image-url.jpg";

    const starRatingHtml = generateStarRating(hotel.hotelCategory.starNumber);
    const starNumberName = hotel.hotelCategory.starNumberName;

    return `
        <div class="custom-hotel-container">
            <div class="custom-card-hotel">
                <img src="${imgSrc}" class="custom-hotel-img" alt="${hotel.name}">
                <div class="custom-hotel-content">
                    <h5 class="custom-hotel-title" style="font-weight: bold">${hotel.name}</h5>
                    <p class="custom-hotel-address" style="margin-bottom: 10px;">${hotel.address}</p>
                    <a href="${hotel.websiteLink}" class="custom-btn-hotel custom-btn-primary">Reservation</a>
                </div>
            </div>
        </div>
    `;
}

// Function to render hotel cards for the current page
function renderHotelCardsForCurrentPage() {
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = Math.min(startIndex + itemsPerPage, hotelsData.length);
    const hotelsContainer = document.getElementById("hotelsCardContainer");
    hotelsContainer.innerHTML = "";

    hotelsData.sort((a, b) =>
        a.name.localeCompare(b.name, "en", { sensitivity: "base" })
    );

    for (let i = startIndex; i < endIndex; i++) {
        const hotelCard = generateHotelCard(hotelsData[i]);
        hotelsContainer.innerHTML += hotelCard;
    }
}

function fetchHotelsData(page) {
    const apiUrl = `https://tourism.surabaya.go.id/api/kominfo/hotel?page=${page}`;

    fetch(apiUrl)
        .then((res) => res.json())
        .then((data) => {
            if (data && data.data && Array.isArray(data.data.data)) {
                hotelsData = hotelsData.concat(data.data.data);
                totalItems = data.data.total;

                if (hotelsData.length >= totalItems) {
                    handlePagination();
                } else {
                    fetchHotelsData(page + 1);
                }

                currentPage = 1;
                renderHotelCardsForCurrentPage();
            } else {
                console.log("Data is not in the expected format.");
            }
        })
        .catch((error) => console.log(error));
}

function handlePagination() {
    const paginationContainer = document.getElementById("pagination");
    paginationContainer.innerHTML = "";

    const totalPages = Math.ceil(totalItems / itemsPerPage);

    if (currentPage > 1) {
        const prevButton = document.createElement("button");
        prevButton.textContent = "Previous";
        prevButton.className = "pagination-button prev-next-button";
        prevButton.addEventListener("click", () => {
            currentPage--;
            renderHotelCardsForCurrentPage();
        });
        paginationContainer.appendChild(prevButton);
    }

    for (let i = 1; i <= totalPages; i++) {
        const pageButton = document.createElement("button");
        pageButton.textContent = i;
        pageButton.className = "pagination-button";
        if (i === currentPage) {
            pageButton.classList.add("active-button");
        }
        pageButton.addEventListener("click", () => {
            currentPage = i;
            renderHotelCardsForCurrentPage();
        });
        paginationContainer.appendChild(pageButton);
    }

    if (currentPage < totalPages) {
        const nextButton = document.createElement("button");
        nextButton.textContent = "Next";
        nextButton.className = "pagination-button prev-next-button";
        nextButton.addEventListener("click", () => {
            currentPage++;
            renderHotelCardsForCurrentPage();
        });
        paginationContainer.appendChild(nextButton);
    }
}

fetchHotelsData(currentPage);