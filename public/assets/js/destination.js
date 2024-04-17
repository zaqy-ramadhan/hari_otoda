/*function showDescription(title, description) {
  const customModal = document.getElementById("customModal");
  const customModalTitle = document.getElementById("customModalTitle");
  const customModalDescription = document.getElementById(
    "customModalDescription"
  );

  customModalTitle.textContent = title;
  customModalDescription.textContent = description;
  customModal.style.display = "block";
}

function closeCustomModal() {
  const customModal = document.getElementById("customModal");
  customModal.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
  const itemsPerPage1 = 10; // Number of items per page
  let currentPage1 = 1; // Current page
  const totalDataPages = 4;

  // Convert specific destination names to lowercase for case-insensitive comparison
  const specificDestinations = [
    "Patung Buddha 4 Wajah",
    "Sentra Kuliner G-Walk",
    "Museum Blockbuster",
    "Wisata Perahu Kalimas",
    "Taman Suroboyo",
    "Kebun Binatang Surabaya",
    "Taman Hiburan Pantai (THP) Kenjeran",
    "Kebun Raya Mangrove Gunung Anyar",
    "Museum Pendidikan Surabaya",
    "Romokalisari Adventure Land",
    "Monumen Kapal Selam",
    "Taman Bermain Atlantis Land Kenjeran",
    "Museum Olahraga Surabaya",
  ].map((name) => name.toLowerCase());

  // Function to generate a single destination card
  function generateDestinationCard(destination) {
    const imgSrc =
      destination.touristDestinationFiles[0] &&
      destination.touristDestinationFiles[0].link
        ? destination.touristDestinationFiles[0].link
        : "placeholder-image-url.jpg";

    const customDescription = destination.desctiptionInggris; // Use the Indonesian description

    // Escape special characters and line breaks
    const descriptionArg = customDescription
      .replace(/'/g, "\\'")
      .replace(/\n/g, "\\n");

    return `
    <div class="custom-hotel-container">
        <div class="custom-card-hotel">
            <img src="${imgSrc}" class="custom-hotel-img" alt="${destination.nameIndonesia}" onerror="handleImageError(this)">
            <div class="custom-hotel-content">
                <h5 class="custom-hotel-title" style="font-weight: bold">${destination.nameIndonesia}</h5>
                <p class="custom-hotel-address">${destination.address}</p>
                <button class="custom-btn-hotel custom-btn-primary" onclick="showDescription('${destination.nameIndonesia}', '${descriptionArg}')">Description</button>
                <a class="custom-btn-hotel custom-btn-primary" href="https://www.google.com/maps?q=${destination.latitude},${destination.longitude}" target="_blank">Location</a>
            </div>
        </div>
    </div>
    `;
  }
  // Function to show the custom modal
  function showDescription(title, description) {
    const customModal = document.getElementById("customModal");
    const customModalTitle = document.getElementById("customModalTitle");
    const customModalDescription = document.getElementById(
      "customModalDescription"
    );

    customModalTitle.textContent = title;
    customModalDescription.textContent = description;
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
    const customModalDescription = document.getElementById(
      "customModalDescription"
    );

    customModal.style.display = "none";
    customModalDescription.textContent = ""; // Clear the description
  }

  // Function to handle image loading errors
  function handleImageError(imageElement) {
    // Replace the broken image with the placeholder image
    imageElement.src = "placeholder-image-url.jpg";
  }

  // Function to render destination cards for the specific destinations
  function renderSpecificDestinationCards(destinationData) {
    const destinationContainer = document.getElementById(
      "destinationCardContainer"
    );
    destinationContainer.innerHTML = "";

    destinationData.forEach((destination) => {
      const destinationName = destination.nameIndonesia.toLowerCase();
      if (specificDestinations.includes(destinationName)) {
        const destinationCard = generateDestinationCard(destination);
        destinationContainer.innerHTML += destinationCard;
      }
    });
  }

  // Function to fetch destination data from all pages
  async function fetchAllDestinationData() {
    try {
      const allDestinations = [];
      for (let page = 1; page <= 5; page++) {
        const response = await fetch(
          `https://tourism.surabaya.go.id/api/kominfo/destination?page=${page}`
        );
        const data = await response.json();

        if (data && data.data && Array.isArray(data.data.data)) {
          allDestinations.push(...data.data.data);
        }
      }

      renderSpecificDestinationCards(allDestinations);
      // Pagination logic can be added here if needed.
    } catch (error) {
      console.error("Error fetching data:", error);
    }
  }

  // Initial load of destination data
  fetchAllDestinationData();
});
*/