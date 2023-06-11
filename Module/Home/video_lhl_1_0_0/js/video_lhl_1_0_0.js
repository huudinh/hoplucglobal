function numberPage(pageNumber, index) {
    let array = [];
    for (let i = 0; i < video_lhl_1_0_0_menu.length; i++) {
        array.push(video_lhl_1_0_0_menu[i].img.length);
    }
    if (array[index] < pageNumber) {
        return array[index];
    } else {
        return video_lhl_1_0_0_pageNumber;
    }
}

// gioi hạn ảnh
let video_lhl_1_0_0_numberLimit = 8;

// so trang
let video_lhl_1_0_0_pageNumber = 8;


let video_lhl_1_0_0_title = '' //Tiêu đề menu
let video_lhl_1_0_0_isOpenMenu = true // trạng thái mob menu

// vị trí của hình ảnh trong modal
const video_lhl_1_0_0_indexDetail = {
    index: 0,
    setIndex(idx) {
        this.index = idx
    }
}

// Xử lý đóng/mở mob menu
const video_lhl_1_0_0_handleOpenMenu = () => {
    if (window.innerWidth > 767) {
        video_lhl_1_0_0_isOpenMenu = true
        return
    }
    if (video_lhl_1_0_0_isOpenMenu === true) {
        video_lhl_1_0_0_isOpenMenu = false
    } else {
        video_lhl_1_0_0_isOpenMenu = true
    }
    document.getElementById('video_lhl_1_0_0__root').innerHTML = video_lhl_1_0_0_main(video_lhl_1_0_0_menu)
    return
}

// Xử lý chuyển tab
const video_lhl_1_0_0_handleChangeTab = (name, link, index) => {
    console.log(index)
    window.location.hash = link
    video_lhl_1_0_0_title = name

    // Check PageNumber
    video_lhl_1_0_0_indexViewMore = numberPage(video_lhl_1_0_0_pageNumber, index);

    video_lhl_1_0_0_handleOpenMenu()
    document.getElementById('video_lhl_1_0_0__root').innerHTML = video_lhl_1_0_0_main(video_lhl_1_0_0_menu)
}

// nút next modal
const video_lhl_1_0_0_nextPage = () => {
    video_lhl_1_0_0_indexDetail.setIndex(video_lhl_1_0_0_indexDetail.index + 1)
    video_lhl_1_0_0_menu.forEach(item => {
        if (item.link === window.location.hash) {
            if (video_lhl_1_0_0_indexDetail.index >= item.img.length) {
                video_lhl_1_0_0_indexDetail.setIndex(0)
            }
            document.querySelector('.modalVideo_da_1_0_0 iframe').src = `https://www.youtube.com/embed/${item.img[video_lhl_1_0_0_indexDetail.index].src}?autoplay=1&mute=1`
        }
    })
}

//nut pre modal
const video_lhl_1_0_0_prePage = () => {
    video_lhl_1_0_0_indexDetail.setIndex(video_lhl_1_0_0_indexDetail.index - 1)
    video_lhl_1_0_0_menu.forEach(item => {
        if (item.link === window.location.hash) {
            if (video_lhl_1_0_0_indexDetail.index <= 0) {
                video_lhl_1_0_0_indexDetail.setIndex(item.img.length - 1)
            }
            document.querySelector('.modalVideo_da_1_0_0 iframe').src = `https://www.youtube.com/embed/${item.img[video_lhl_1_0_0_indexDetail.index].src}?autoplay=1&mute=1`
        }
    })
}

// Xử lý xem thêm
const video_lhl_1_0_0_handleViewMore = (length) => {
    video_lhl_1_0_0_indexViewMore = length >= video_lhl_1_0_0_numberLimit ? length : video_lhl_1_0_0_numberLimit
    document.getElementById('video_lhl_1_0_0__root').innerHTML = video_lhl_1_0_0_main(video_lhl_1_0_0_menu)
}

// Xử lý mở modal
const video_lhl_1_0_0_handleOpenModal = (smallImg, i) => {
    let img = []
    video_lhl_1_0_0_indexDetail.setIndex(i)
    video_lhl_1_0_0_menu.forEach(item => {
        if (item.link === window.location.hash) {
            img = item.img.filter(img => img.src === smallImg)
        }
    })
    document.querySelector('body').insertAdjacentHTML("beforeend", video_lhl_1_0_0_PicModal(img[0].src))
}

// Xử lý đóng modal
const video_lhl_1_0_0_handleCloseModal = () => {
    document.querySelector('.modalVideo_da_1_0_0').remove()
}

// component MenuItem
const video_lhl_1_0_0_MenuItem = (item, index, active) => {
    return `<li onclick="video_lhl_1_0_0_handleChangeTab('${item.name}','${item.link}', '${index}')" class="${active ? 'active' : ''}"><a href="${item.link}" >${item.name}</a></li>`
}

// component PicItem
const video_lhl_1_0_0_PicItem = ({ smallImg, desc, idx }) => {
    return ` 
    <div onclick="video_lhl_1_0_0_handleOpenModal('${smallImg}',${idx})" class="video_lhl_1_0_0__item">
        <div class="video_lhl_1_0_0__itemBox">
            <img width="390" height="211" src="https://img.youtube.com/vi/${smallImg}/hqdefault.jpg" alt="">
            <div class="video_lhl_1_0_0__play">
                <img width="50" height="50" src="${video_lhl_1_0_0_url}images/play-icon.svg" alt="">
            </div>
        </div>
        <div class="video_lhl_1_0_0__desc">${desc}</div>
    </div>`
}

// component PicModal
const video_lhl_1_0_0_PicModal = (src) => {
    return `<div class="modalVideo_da_1_0_0">
    <div class="modalVideo_da_1_0_0__box">
        <div class="modalVideo_da_1_0_0__close" onclick="video_lhl_1_0_0_handleCloseModal()">×</div>
        <div class="modalVideo_da_1_0_0__wrapper">
        <iframe src="https://www.youtube.com/embed/${src}?autoplay=1&mute=1" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="modalVideo_da_1_0_0__control">
            <button class="modalVideo_da_1_0_0__prev" onClick="video_lhl_1_0_0_prePage()"><img width="32" height="32" src="${video_lhl_1_0_0_url}images/arrow-icon.svg" alt=""></button>
            <button class="modalVideo_da_1_0_0__next" onclick="video_lhl_1_0_0_nextPage()"><img width="32" height="32" src="${video_lhl_1_0_0_url}images/arrow-icon.svg" alt=""></button>
        </div>
    </div>
</div>`
}

// giao diện chính
const video_lhl_1_0_0_main = (data) => {
        let tab = ''
        let picItem = ''
        let length = 0
        data.forEach((item, index) => {
            if (window.location.hash === item.link) {
                length = item.img.length
            }
            tab += video_lhl_1_0_0_MenuItem(item, index, window.location.hash === item.link ? true : false, length)
            for (let i = 0; i < video_lhl_1_0_0_indexViewMore; i++) {
                if (window.location.hash === item.link) {
                    picItem += video_lhl_1_0_0_PicItem({
                        smallImg: item.img[i].src,
                        desc: item.img[i].desc,
                        idx: i
                    })
                }
            }
        })
        return `<div class="container">
            <div class="video_1_0_0">
                <div class="video_1_0_0__content">
                    <div class="video_lhl_1_0_0">
                        <div class="video_lhl_1_0_0__title">Videos</div>
                        <div class="video_lhl_1_0_0__box">
                            ${picItem}
                        </div>
                           ${length === video_lhl_1_0_0_indexViewMore ? '' : `<div class="video_lhl_1_0_0__btn"><button onClick="video_lhl_1_0_0_handleViewMore(${length})">Xem thêm</button></div>`} 
                    </div>
                </div>
                <div class="video_1_0_0__sidebar">
                    <div class="sidebar_da_1_0_0">
                        <div class="sidebar_da_1_0_0__title">
                            <span>${video_lhl_1_0_0_title}</span>
                            <button onclick="video_lhl_1_0_0_handleOpenMenu()">Video Other >></button>
                        </div>
                        ${video_lhl_1_0_0_isOpenMenu ? `<ul class="slideIn">${tab}</ul>` : ``}
                    </div>
                </div>
               ${video_lhl_1_0_0_isOpenMenu ? `<div class="video_1_0_0__bg" onclick="video_lhl_1_0_0_handleOpenMenu()"></div>` : ''}
            </div>
        </div>`
}


if (window.location.hash === '') window.location.hash = video_lhl_1_0_0_menu[0].link

video_lhl_1_0_0_menu.forEach((item,index) => {
    if (window.location.hash === item.link) video_lhl_1_0_0_handleChangeTab(item.name, item.link, index)
})

// click outSide
window.onclick = (e) => {
    if (window.innerWidth < 767 && e.target === document.querySelector('.sidebar_da_1_0_0')) {
        video_lhl_1_0_0_handleOpenMenu()
    }
    if (e.target === document.querySelector('.modalVideo_da_1_0_0')) {
        video_lhl_1_0_0_handleCloseModal()
    }
}