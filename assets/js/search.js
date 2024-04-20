document
  .getElementById("project-search")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    let terms = document.querySelector("input").value.trim();
    loadProject(terms);
  });

function loadProject(terms) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      let projects = JSON.parse(this.responseText);
      if (projects && typeof projects === 'object' && !Array.isArray(projects)) {
        projects = [projects];
      }
      let projectsDiv = document.getElementById("projects");
      projectsDiv.innerHTML = "";
      projects.forEach((project) => {
        projectsDiv.innerHTML += `<div class='project'> <h3>${project.name}</h3><p>${project.desc}</p></div>`;
      });
    }
  };
  xhttp.open("POST", "api_search.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("q=" + encodeURIComponent(terms));
}
