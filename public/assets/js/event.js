document.addEventListener("DOMContentLoaded", function () {
const itemsPerPage4 = 10; // Number of items per page
let currentPage4 = 1; // Current page

function generateEventCard(event) {
    // Check if "link" is defined in the eventFiles object, otherwise use a placeholder image
    const imgSrc = event.eventFiles[0] && event.eventFiles[0].link
        ? event.eventFiles[0].link
        : "placeholder-image-url.jpg";

    const description = event.descriptionIndonesia ? event.descriptionIndonesia : "No description available";

    return `
<div class="custom-hotel-container">
    <div class= "custom-card-hotel">
        <img src="${imgSrc}" class="custom-hotel-img" alt="${event.nameIndonesia}" onerror="handleImageError(this)">
        <div class="custom-hotel-content">
            <h5 class="custom-hotel-title" style="font-weight: bold">${event.nameIndonesia}</h5>
            <p class="custom-hotel-address">${event.address}</p>
            <p class="custom-hotel-address" style="font-weight: bold">Event Start: ${event.startDate}</p>
            <p class="custom-hotel-address" style="font-weight: bold">Event End: ${event.endDate}</p>
            <p class="custom-hotel-address">${description}</p>
            <button cclass="custom-btn-hotel custom-btn-primary" onclick="openGoogleMaps(${event.latitude}, ${event.longitude})">Location</button>
        </div>
    </div>
</div>
`;
}



// Function to show the custom modal
function showCustomModal(title, description) {
    const customModal = document.getElementById("customModal");
    const customModalTitle = document.getElementById("customModalTitle");
    const customModalDescription = document.getElementById("customModalDescription");

    customModalTitle.textContent = title;
    customModalDescription.textContent = description; // Display the description in the modal
    customModal.style.display = "block";
}

// Function to open Google Maps with specified latitude and longitude
function openGoogleMaps(latitude, longitude) {
    const url = `https://www.google.com/maps?q=${latitude},${longitude}`;
    window.open(url, "_blank");
}

// Function to close the custom modal
function closeCustomModal() {
    const customModal = document.getElementById("customModal");
    customModal.style.display = "none";
}

// Function to handle image loading errors
function handleImageError(imageElement) {
    // Replace the broken image with the placeholder image
    imageElement.src = "placeholder-image-url.jpg";
}

// Function to render event cards for the current page
function renderEventCards(eventData) {
    const eventContainer = document.getElementById("eventCardContainer");
    eventContainer.innerHTML = "";

    for (let i = 0; i < eventData.length; i++) {
        const eventCard = generateEventCard(eventData[i]);
        eventContainer.innerHTML += eventCard;
    }
}

// Function to fetch event data for a specific page
async function fetchEventData(pageUrl) {
    try {
        const response = await fetch(pageUrl);
        const data = await response.json();

        // Log the API response for inspection
        console.log(data);

        if (data && data.data && Array.isArray(data.data.data)) {
            // Skip the first event data, starting from index 1
            const eventDataToRender = data.data.data.slice(1);

            totalPages = data.data.lastPage; // Update total pages based on API response
            renderEventCards(eventDataToRender); // Render event cards for the current page
            renderPagination(data.data); // Render pagination using the provided data
        } else {
            console.log('Data is not in the expected format or there are no events.');
        }
    } catch (error) {
        console.error('Error fetching data:', error);
    }
}

// Function to render pagination using provided pagination data
function renderPagination(paginationData) {
    const paginationContainer = document.getElementById("pagination");
    paginationContainer.innerHTML = "";

    if (paginationData && paginationData.links && Array.isArray(paginationData.links)) {
        for (let i = 0; i < paginationData.links.length; i++) {
            const link = paginationData.links[i];
            if (link.url) {
                const pageLink = document.createElement("li");
                pageLink.className = link.active ? "page-item active" : "page-item";
                const pageLinkAnchor = document.createElement("a");
                pageLinkAnchor.className = "page-link";
                pageLinkAnchor.href = link.url;
                pageLinkAnchor.innerHTML = link.label; // Use HTML entities for special characters

                // Add an event listener to handle page navigation
                pageLinkAnchor.addEventListener("click", (event) => {
                    event.preventDefault();
                    fetchEventData(link.url); // Use the provided URL for fetching data
                });

                pageLink.appendChild(pageLinkAnchor);
                paginationContainer.appendChild(pageLink);
            }
        }
    }
}

// Initial load of event data
fetchEventData("https://tourism.surabaya.go.id/api/kominfo/event?page=1");
});