// stars.js

function generateStarRating(starNumber) {
    const maxStars = 5; // Maximum number of stars
    const fullStars = Math.floor(starNumber); // Number of full stars
    const halfStar = starNumber - fullStars >= 0.5; // Check for half star
  
    let starHtml = '';
  
    for (let i = 1; i <= maxStars; i++) {
      if (i <= fullStars) {
        starHtml += '<span class="star full-star">&#9733;</span>'; // Full star
      } else if (halfStar) {
        starHtml += '<span class="star half-star">&#9733;</span>'; // Half star
        halfStar = false; // Only add one half star
      } else {
        starHtml += '<span class="star">&#9734;</span>'; // Empty star
      }
    }
  
    return starHtml;
  }
  