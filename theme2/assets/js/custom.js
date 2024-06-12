document.addEventListener('DOMContentLoaded', function() {
  const text = document.querySelector(".circle-text p");
  if (text != null) {
    text.innerHTML = text.innerText
    .split("")
    .map(
      (char, i) => `<span style="transform:rotate(${i * 5.8}deg)">${char}</span>`
    )
    .join("");
  }
});
