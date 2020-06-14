// ================================= image gallery scripting ==========================================
const show_All_Filter = document.querySelector(".showall-filter");
const show_All = document.querySelectorAll(".showall");

const workshop_Filter = document.querySelector(".Workshops-filter");
const workshop_All = document.querySelectorAll(".workshops");

const training_Filter = document.querySelector(".training-filter");
const training_All = document.querySelectorAll(".training");

const displayAll = () => {
    show_All_Filter.style.color = "white";
    show_All_Filter.style.backgroundColor = "rgb(45, 12, 178)";

    workshop_Filter.style.color = "black";
    workshop_Filter.style.backgroundColor = "white";

    training_Filter.style.color = "black";
    training_Filter.style.backgroundColor = "white";

    training_All.forEach((training) => {
        training.style.display = "flex";
    });
    workshop_All.forEach((workshop) => {
        workshop.style.display = "flex";
    });
    show_All.forEach((showall) => {
        showall.style.display = "flex";
    });
};

const showWorkshop = () => {
    show_All_Filter.style.color = "black";
    show_All_Filter.style.backgroundColor = "white";

    workshop_Filter.style.color = "white";
    workshop_Filter.style.backgroundColor = "rgb(45, 12, 178)";

    training_Filter.style.color = "black";
    training_Filter.style.backgroundColor = "white";

    training_All.forEach((training) => {
        training.style.display = "none";
    });
    show_All.forEach((showall) => {
        showall.style.display = "none";
    });
    workshop_All.forEach((workshop) => {
        workshop.style.display = "flex";
    });
};

const showTraining = () => {
    show_All_Filter.style.color = "black";
    show_All_Filter.style.backgroundColor = "white";

    workshop_Filter.style.color = "black";
    workshop_Filter.style.backgroundColor = "white";

    training_Filter.style.color = "white";
    training_Filter.style.backgroundColor = "rgb(45, 12, 178)";

    show_All.forEach((showall) => {
        showall.style.display = "none";
    });
    workshop_All.forEach((workshop) => {
        workshop.style.display = "none";
    });
    training_All.forEach((training) => {
        training.style.display = "flex";
    });
};

show_All_Filter.addEventListener("click", displayAll);
workshop_Filter.addEventListener("click", showWorkshop);
training_Filter.addEventListener("click", showTraining);
// ====================================================================================================

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
const showBiographyTab = (user) => {
    document.querySelector(
        ".Leadership-outer-general-modal-popup"
    ).style.display = "flex";
};

const userBiography = (firstName, middleName, lastName, bio) => {
    showBiographyTab();
    document.querySelector(
        ".our-leadership-modal-bio-heading .modal-title"
    ).textContent = firstName + " " + middleName + " " + lastName;
    document.querySelector(".our-leadership-modal-bio-details").innerHTML = bio;
};

const closeWindowTab = () => {
    let closeTab = document.querySelector(
        ".Leadership-outer-general-modal-popup"
    );
    closeTab.style.display = "none";
};

const user_One = document.querySelector(".first-leadership-aside");
const user_Two = document.querySelector(".second-leadership-aside");
const user_Three = document.querySelector(".third-leadership-aside");
const closeLeadershipTap = document.querySelector(
    ".close-leadership-modal-pop-up .fa-window-close"
);

closeLeadershipTap.addEventListener("click", closeWindowTab);
user_One.addEventListener("click", () => {
    userBiography("Phillp", "Simiyu", "Wandibba");
});

user_Two.addEventListener("click", () => {
    userBiography(
        "Gregoire",
        "",
        "Piller",
        "<p>Greg most recently served as the Director of Partnerships and External Relations at the University of Kigali. Prior to that, he was the Head of Development and Partnerships at the Sustainable Development Goals Center for Africa (SDGC/A) in Kigali. From 2013 to 2016, Grégoire worked at Strathmore University in Kenya in different capacities managing partnerships and fundraising activities at the Business School.</p><p>Greg serves in several advisory boards, including Ongoza Foundation, Nyatha Fund, Lorcan Investments and Bushra Energy. He is a member of the Chartered Institute of Marketing (CIM) and the Project Management Institute (PMI). He speaks French, Italian and English.</p>"
    );
});

user_Three.addEventListener("click", () => {
    userBiography("Millycent", "Devinah Aoko", "none");
});
// ==============================================================================================
