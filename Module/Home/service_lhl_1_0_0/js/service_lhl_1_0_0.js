// Component serviceCard
const serviceCard = (data) => {
    return `
        <a href="${data.link}">
            <div>
                <img src="${data.src}" alt="${data.text}">
            </div>
            <p>${data.text}</p>
        </a>
    `
}

// Loop Data
service_lhl_1_0_0_data.forEach((data) => {
    document.querySelector(".slide_step").insertAdjacentHTML('afterbegin', serviceCard(data));
})

//Slider Step by Step
var slide_step = tns({
    container: '#slide_step',
    items: 5,
    controlsContainer: '#slide_stepControl',
    // navContainer: '#slide_stepNav',
    nav:false,
    navAsThumbnails: false,
    autoplay: false,
    autoplayTimeout: 1000,
    // autoplayButton: '#customize-toggle',
    gutter: 10,
    responsive: {
        0: {
            items: 2,
        },
        500: {
            items: 3,
        },
        800: {
            items: 5,
        }
    },
});