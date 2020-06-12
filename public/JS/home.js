// const showallfilter = document.querySelector('.showall-filter');
// const traningfilter = document.querySelector('.training-filter');
// const workshopsfilter = document.querySelector('.Workshops-filter');

// const showall = document.querySelector('.showall');
// const traning = document.querySelector('.training');
// const workshops = document.querySelector(".workshops");

// const displayAll = () => {
//     showallfilter.style.backgroundColor = 'rgb(45, 12, 178)';
//     traningfilter.style.backgroundColor = 'white';
//     workshopsfilter.style.backgroundColor = 'white';
// }

// showallfilter.addEventListener('click', displayAll);

// const displayTraining = () => {
//     showallfilter.style.backgroundColor = 'white';
//     traningfilter.style.backgroundColor = 'rgb(45, 12, 178)';
//     workshopsfilter.style.backgroundColor = 'white';
// }

// traningfilter.addEventListener('click', displayTraining);

// const displayWorkshops = () => {
//     showallfilter.style.backgroundColor = 'white';
//     traningfilter.style.backgroundColor = 'white';
//     workshopsfilter.style.backgroundColor = 'rgb(45, 12, 178)';
// }

// workshopsfilter.addEventListener('click', displayWorkshops);

// =========================== here the nav-bar scripting start here ==============================
function classToggle() {
    const navs = document.querySelectorAll(".Navbar__Items");

    navs.forEach((nav) => nav.classList.toggle("Navbar__ToggleShow"));
}

document
    .querySelector(".Navbar__Link-toggle")
    .addEventListener("click", classToggle);

// ==================================================================================================

// ========================== here the modal pop up for our leadership ====================================
const changeBio = (firstName, middleName, lastName, bio) => {
    const showWindowTab = () => {
        let showTab = document.querySelector(
            ".Leadership-outer-general-modal-popup"
        );
        showTab.style.display = "flex";
    };
    showWindowTab();
    let fullName = document.querySelector(".modal-title");
    let bioDetails = document.querySelector(".modal-text");
    fullName.textContent = firstName + " " + middleName + " " + lastName;
    bioDetails.textContent = bio;
};

const userBios = {
    names: {
        userOneFirstName: "Phillip",
        userOneMiddleName: "Simiyu",
        userOneLastName: "Wandibba",

        userTwoFirstName: "Gregoire",
        userTwoMiddleName: "",
        userTwoLastName: "Piller",

        userThreeFirstName: "Millycent",
        userThreeMiddleName: "Devinah",
        userThreeLastName: "Aoko",
    },
    greg:
        "Greg most recently served as the Director of Partnerships and External Relations at" +
        "the University of Kigali. Prior to that, he was the Head of Development and Partnerships at the" +
        "Sustainable Development Goals Center for Africa (SDGC/A) in Kigali. From 2013 to 2016, " +
        "Grégoire worked at Strathmore University in Kenya in different capacities managing partnerships" +
        "and fundraising activities at the Business School.Greg serves in several advisory boards, including" +
        "Ongoza Foundation, Nyatha Fund, Lorcan Investments and Bushra Energy. He is a member of the Chartered" +
        "Institute of Marketing (CIM) and the Project Management Institute (PMI). He speaks French, Italian and" +
        "English.",
    philip: "nill",
    devinah: "none",
};

// const user_One = ;

// const user_Two = ;

// const user_Three = ;

const closeLeadershipTap = document.querySelector(".fa-window-close");

const closeWindowTab = () => {
    let closeTab = document.querySelector(
        ".Leadership-outer-general-modal-popup"
    );
    closeTab.style.display = "none";
};

// document.querySelector('.first-leadership-aside').addEventListener('click', changeBio(userBios.names.userOneFirstName, userBios.names.userOneMiddleName,
//     userBios.names.userOneLastName, userBios.philip), false);

// document.querySelector('.second-leadership-aside').addEventListener('click', changeBio(userBios.names.userTwoFirstName, userBios.names.userTwoMiddleName,
//     userBios.names.userTwoLastName, userBios.greg), t);

// document.querySelector('.third-leadership-aside').addEventListener('click', changeBio(userBios.names.userThreeFirstName, userBios.names.userThreeMiddleName,
//     userBios.names.userThreeLastName, userBios.philip), true);

closeLeadershipTap.addEventListener("click", closeWindowTab);

// ==============================================================================================

// ======================= Project Modal Pop scripting =========================================
let project_Close_Window_Tab = documentquerySelector(
    ".close-project-window-tap .fa-window-close"
);
project_Close_Window_Tab.addEventListener("click", function () {
    document.querySelector(
        ".project-donate-general-container-selector"
    ).style.display = "none";
});

let project_Show_Window_Tab = documentquerySelector(".project-pop-up");
project_Show_Window_Tab.addEventListener("click", function () {
    document.querySelector(
        ".project-donate-general-container-selector"
    ).style.display = "flex";
});
// =============================================================================================
