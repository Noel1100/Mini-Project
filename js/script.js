// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  
  // Function to handle the animation when elements are in the viewport
  function handleScrollAnimation() {
    const blocks = document.querySelectorAll('.block');
  
    blocks.forEach((block, index) => {
      if (isInViewport(block) && !block.classList.contains('animated')) {
        block.classList.add('animated');
      }
    });
  }
  
  // Listen for scroll events and trigger the animation
  window.addEventListener('scroll', handleScrollAnimation);
  
  // Initial check in case some elements are already in the viewport
  handleScrollAnimation();
  