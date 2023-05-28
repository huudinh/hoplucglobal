// Component news_lhl_1_0_0__Card
const news_lhl_1_0_0__Card = (data) => {
    return `
        <a href="${data.link}">
            <img src="${data.src}" alt="${data.text}">
            <h3 class="news_lhl_1_0_0__boxTitle">Training process of shipbuilders at Vietnam Manpower</h3>
        </a>
       
    `;
}

// Loop Data
news_lhl_1_0_0_data.forEach((data) => {
    document.querySelector(".news_lhl_1_0_0__box").insertAdjacentHTML('afterbegin', news_lhl_1_0_0__Card(data));
})