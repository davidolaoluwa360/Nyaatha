// const showallfilter = document.querySelector('.showall-filter');
// const traningfilter = document.querySelector('.training-filter');
// const workshopsfilter = document.querySelector('.Workshops-filter');

// const showall = document.querySelector('.showall');
// const traning = document.querySelector('.training');
// const workshops = document.querySelector(".workshops");
// const setnone = document.querySelector(".none");

// const displayAll = () => {
//     showallfilter.style.backgroundColor = 'rgb(45, 12, 178)';
//     traningfilter.style.backgroundColor = 'white';
//     workshopsfilter.style.backgroundColor = 'white';
//     showall.style.display = 'flex';
// }

// const displayTraining = () => {
//     showallfilter.style.backgroundColor = 'white';
//     traningfilter.style.backgroundColor = 'rgb(45, 12, 178)';
//     workshopsfilter.style.backgroundColor = 'white';
//     showall.style.display = 'none';
//     workshopsfilter.style.display = 'none';
//     traning.style.display = 'flex';
// }

// const displayWorkshops = () => {
//     showallfilter.style.backgroundColor = 'white';
//     traningfilter.style.backgroundColor = 'white';
//     workshopsfilter.style.backgroundColor = 'rgb(45, 12, 178)';
//     showall.style.display = 'none';
//     traning.style.display = 'none';
//     workshopsfilter.style.display = 'flex';
// }

// showallfilter.addEventListener('click', 'displayAll()');

// traningfilter.addEventListener('click', 'displayTraining()');

// workshopsfilter.addEventListener('click', 'displayWorkshops()');

function classToggle() {
    const navs = document.querySelectorAll('.Navbar__Items')

    navs.forEach(nav => nav.classList.toggle('Navbar__ToggleShow'));
  }

document.querySelector('.Navbar__Link-toggle').addEventListener('click', classToggle);