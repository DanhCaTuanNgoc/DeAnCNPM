document.addEventListener("DOMContentLoaded", () => {
  const cartButton = document.getElementById("cartButton");
  const cartOverlay = document.getElementById("cartOverlay");
  const closeCart = document.getElementById("closeCart");

  cartButton.addEventListener("click", () => {
    cartOverlay.style.display = "flex"; // Show overlay with flex to center content
    setTimeout(() => {
      cartOverlay.classList.add("active"); // Add active class after small delay for smooth transition
      
    }, 10);
  });

  closeCart.addEventListener("click", () => {
    cartOverlay.classList.remove("active"); // Remove active class
    setTimeout(() => {
      cartOverlay.style.display = "none"; // Hide after transition is complete
    }, 10); // Timeout matches transition duration
  });
});
