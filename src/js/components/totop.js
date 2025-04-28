const topBtn = document.getElementById('topBtn')



var target = document.querySelector("footer");

// Create a new Intersection Observer instance
let observer = new IntersectionObserver(callback);

// Start observing the target element
observer.observe(target);

function callback(entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // Show button
      topBtn.style.visibility = "visible";
      topBtn.style.opacity = "1";
    } else {
      // Hide button
      topBtn.style.visibility = "hidden";
      topBtn.style.opacity = "0";
    }
  });
}
