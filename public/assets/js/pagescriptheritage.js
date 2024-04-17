function showCustomModal(title, description) {
  const customModal = document.getElementById("customModal");
  const customModalTitle = document.getElementById("customModalTitle");
  const customModalDescription = document.getElementById("customModalDescription");

  customModalTitle.textContent = title;
  customModalDescription.innerHTML = description.replace(/<\/?p>/g, "");
  customModal.style.display = "block";
}

function closeCustomModal() {
  const customModal = document.getElementById("customModal");
  customModal.style.display = "none";
}
document.addEventListener("DOMContentLoaded", function () {
  const itemsPerPage = 18; // Number of items per page
  let currentPage = 1; // Current page
  let heritageData = []; // Array to store heritage data
  const totalDataPages = 4; // Total number of data pages

  // Inside the generateHeritageCard function
function generateHeritageCard(heritage) {
  const imgSrc = heritage.touristDestinationFiles[0] && heritage.touristDestinationFiles[0].link
      ? heritage.touristDestinationFiles[0].link
      : "placeholder-image-url.jpg";

  const description = heritage.descriptionEnglish;

  return `
  <div class="custom-hotel-container">
      <div class="custom-card-hotel">
          <img src="${imgSrc}" class="custom-hotel-img" alt="${heritage.nameIndonesia}" onerror="handleImageError(this)">
          <div class="custom-hotel-content">
              <h5 class="custom-hotel-title" style="font-weight: bold">${heritage.nameIndonesia}</h5>
              <p class="custom-hotel-address">${heritage.address}</p>
              <button class="custom-btn-hotel custom-btn-primary" onclick="showCustomModal('${heritage.nameIndonesia}', \`${description}\`)">Description</button>
              <a class="custom-btn-hotel custom-btn-primary" href="https://www.google.com/maps?q=${heritage.latitude},${heritage.longitude}" target="_blank">Location</a>
          </div>
      </div>
  </div>
  `;
}


  // Function to show the custom modal
  function showCustomModal(title, description) {
    const customModal = document.getElementById("customModal");
    const customModalTitle = document.getElementById("customModalTitle");
    const customModalDescription = document.getElementById(
      "customModalDescription"
    );

    customModalTitle.textContent = title;
    customModalDescription.innerHTML = description.replace(/<\/?p>/g, "");
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
    imageElement.src = "placeholder-image-url.jpg";
  }

  // Function to render heritage cards for the current page
  function renderHeritageCardsForCurrentPage() {
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = Math.min(startIndex + itemsPerPage, heritageData.length);
    const heritageContainer = document.getElementById("heritageCardContainer");
    heritageContainer.innerHTML = "";

    for (let i = startIndex; i < endIndex; i++) {
      const heritageCard = generateHeritageCard(heritageData[i]);
      heritageContainer.innerHTML += heritageCard;
    }
  }

  // Function to render pagination
  function renderPagination() {
    const totalPages = Math.ceil(heritageData.length / itemsPerPage);
    const paginationContainer = document.getElementById("pagination");

    paginationContainer.innerHTML = "";

    for (let i = 1; i <= totalPages; i++) {
      const pageLink = document.createElement("a");
      pageLink.href = "#";
      pageLink.textContent = i;
      pageLink.addEventListener("click", () => {
        currentPage = i;
        renderHeritageCardsForCurrentPage();
        renderPagination();
      });

      paginationContainer.appendChild(pageLink);
    }
  }

  // Function to fetch heritage data for all pages
  async function fetchAllHeritageData() {
    try {
      for (let page = 1; page <= totalDataPages; page++) {
        const response = await fetch(
          `https://tourism.surabaya.go.id/api/kominfo/destination?page=${page}`
        );
        const data = await response.json();

        if (data && data.data && Array.isArray(data.data.data)) {
          heritageData = heritageData.concat(
            data.data.data.filter((item) => {
              return item.tourismCategory.some(
                (category) => category.name === "Heritage"
              );
            })
          );
        }
      }

      renderHeritageCardsForCurrentPage();
      renderPagination();
    } catch (error) {
      console.error("Error fetching heritage data:", error);
    }
  }
  // Initial load of heritage data
  fetchAllHeritageData();
});
