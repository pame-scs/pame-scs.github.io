function checkSearch() {
  var search = document.getElementById("contact-form").value;
  console.log(search);
}

function clearSearchBar() {
  document.getElementById("contact-form").value = "";
}

document.getElementById("summit-button").addEventListener("click", checkSearch);

document
  .getElementById("summit-button")
  .addEventListener("click", clearSearchBar);