// ======================= Project Modal Pop scripting =========================================
let project_Close_Window_Tab = document.querySelector(
    ".close-project-window-tap .fa-window-close"
);

const project_close = () => {
    document.querySelector(
        ".project-donate-general-container-selector"
    ).style.display = "none";
};
project_Close_Window_Tab.addEventListener("click", project_close);

const project_Show_Window_Tab = document.querySelectorAll(".project-pop-up");
const project_Open = () => {
    let popup_Elements = document.querySelector(
        ".project-donate-general-container-selector"
    );
    popup_Elements.style.display = "flex";
};
project_Show_Window_Tab[0].addEventListener("click", project_Open);
project_Show_Window_Tab[1].addEventListener("click", project_Open);
// =============================================================================================
