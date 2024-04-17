document.addEventListener("DOMContentLoaded", function () {
  const itemsPerPage = 12; // Number of items per page
  let currentPage = 1; // Current page
  let shoppingData = []; // Array to store shopping data
  const totalDataPages = 4; // Total number of data pages

  // Function to generate a single shopping card
  function generateShoppingCard(shopping, index) {
    const imgSrc =
      shopping.touristDestinationFiles[0] &&
      shopping.touristDestinationFiles[0].link
        ? shopping.touristDestinationFiles[0].link
        : "placeholder-image-url.jpg";

    const googleMapsUrl = `https://www.google.com/maps?q=${shopping.latitude},${shopping.longitude}`;

    return `
            <div class="custom-hotel-container">
                <div class= "custom-card-hotel">
                    <img src="${imgSrc}" class="custom-hotel-img" alt="${shopping.nameIndonesia}" onerror="handleImageError(this)">
                    <div class="custom-hotel-content">
                        <h5 class="custom-hotel-title" style="font-weight: bold">${shopping.nameIndonesia}</h5>
                        <p class="custom-hotel-address">${shopping.address}</p>
                        <button class="custom-btn-hotel custom-btn-primary custom-btn-hotel-description"
                            data-title="${shopping.nameIndonesia}"
                            data-description="${shopping.descriptionIndonesia}">
                            Description
                        </button>
                        <a class="custom-btn-hotel custom-btn-primary custom-btn-hotel-location" href="${googleMapsUrl}" target="_blank">Location</a>
                    </div>
                </div>
            </div>
        `;
  }

  // Function to show the description in the custom modal
  function showDescription(title, description) {
    const customModal = document.getElementById("customModal");
    const customModalTitle = document.getElementById("customModalTitle");
    const customModalDescription = document.getElementById("customModalDescription");

    customModalTitle.textContent = title;
    customModalDescription.innerHTML = description.replace(/<\/?p>/g, "");
    customModal.style.display = "block";
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

  // Function to render shopping cards for the current page
  function renderShoppingCardsForCurrentPage() {
    const startIndex = (currentPage - 1) * itemsPerPage;
    const endIndex = Math.min(startIndex + itemsPerPage, shoppingData.length);
    const shoppingContainer = document.getElementById("shoppingCardContainer");

    // Clear the container
    shoppingContainer.innerHTML = "";

    for (let i = startIndex; i < endIndex; i++) {
      const shoppingCard = generateShoppingCard(shoppingData[i], i);
      shoppingContainer.innerHTML += shoppingCard;
    }

    // Add event listeners to "Description" buttons
    const descriptionButtons = shoppingContainer.querySelectorAll(".custom-btn-hotel-description");
    descriptionButtons.forEach((button) => {
      button.addEventListener("click", function () {
        const title = button.getAttribute("data-title");
        const description = button.getAttribute("data-description");
        showDescription(title, description);
      });
    });
  }

  // Function to render pagination
  function renderPagination() {
    const totalPages = Math.ceil(shoppingData.length / itemsPerPage);
    const paginationContainer = document.getElementById("pagination");

    paginationContainer.innerHTML = "";

    for (let i = 1; i <= totalPages; i++) {
      const pageLink = document.createElement("a");
      pageLink.href = "#";
      pageLink.textContent = i;
      pageLink.addEventListener("click", () => {
        currentPage = i;
        renderShoppingCardsForCurrentPage();
        renderPagination();
      });

      paginationContainer.appendChild(pageLink);
    }
  }

  // Function to fetch shopping data for all pages
  async function fetchAllShoppingData() {
    for (let page = 1; page <= totalDataPages; page++) {
      const response = await fetch(
        `https://tourism.surabaya.go.id/api/kominfo/destination?page=${page}`
      );
      const data = await response.json();

      if (data && data.data && Array.isArray(data.data.data)) {
        shoppingData = shoppingData.concat(
          data.data.data.filter((item) => {
            return item.tourismCategory.some(
              (category) => category.name === "Shopping"
            );
          })
        );
      }
    }

    renderShoppingCardsForCurrentPage();
    renderPagination();
  }

  // Initial load of shopping data
  fetchAllShoppingData();
});
