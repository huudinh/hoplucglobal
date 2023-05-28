// Component clients_lhl_1_0_0__Card
const clients_lhl_1_0_0__Card = (data) => {
    return `
        <a href="${data.link}">
            <img src="${data.src}" alt="${data.text}">
        </a>
       
    `;
}

// Loop Data
clients_lhl_1_0_0_data.forEach((data) => {
    document.querySelector(".clients_lhl_1_0_0__box").insertAdjacentHTML('afterbegin', clients_lhl_1_0_0__Card(data));
})