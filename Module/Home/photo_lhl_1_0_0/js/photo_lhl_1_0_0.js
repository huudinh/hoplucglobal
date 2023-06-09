let photo_lhl_1_0_0_title = '' //Tiêu đề menu
let photo_lhl_1_0_0_indexViewMore = 8 // số hình ảnh được hiện
let photo_lhl_1_0_0_isOpenMenu = true // trạng thái mob menu

// vị trí của hình ảnh trong modal
const photo_lhl_1_0_0_indexDetail = {
    index: 0,
    setIndex: function(idx) {
        this.index = idx
    }
}

// Xử lý đóng/mở mob menu
const photo_lhl_1_0_0_handleOpenMenu = () => {
    if (window.innerWidth > 767) {
        photo_lhl_1_0_0_isOpenMenu = true
        return
    }
    if (photo_lhl_1_0_0_isOpenMenu === true) {
        photo_lhl_1_0_0_isOpenMenu = false
    } else {
        photo_lhl_1_0_0_isOpenMenu = true
    }
    document.getElementById('photo_lhl_1_0_0__root').innerHTML = photo_lhl_1_0_0_main(photo_lhl_1_0_0_menu)
    return
}

// Xử lý chuyển tab
const photo_lhl_1_0_0_handleChangeTab = (name, link) => {
    window.location.hash = link
    photo_lhl_1_0_0_title = name
    photo_lhl_1_0_0_indexViewMore = 8
    photo_lhl_1_0_0_handleOpenMenu()
    document.getElementById('photo_lhl_1_0_0__root').innerHTML = photo_lhl_1_0_0_main(photo_lhl_1_0_0_menu)
}

// nút next modal
const photo_lhl_1_0_0_nextPage = () => {
    photo_lhl_1_0_0_indexDetail.setIndex(photo_lhl_1_0_0_indexDetail.index + 1)
    photo_lhl_1_0_0_menu.forEach(item => {
        if (item.link === window.location.hash) {
            if (photo_lhl_1_0_0_indexDetail.index >= item.img.length) {
                photo_lhl_1_0_0_indexDetail.setIndex(0)
            }
            document.querySelector('#modalPhoto').src = item.img[photo_lhl_1_0_0_indexDetail.index].large
        }
    })
}

//nut pre modal
const photo_lhl_1_0_0_prePage = () => {
    photo_lhl_1_0_0_indexDetail.setIndex(photo_lhl_1_0_0_indexDetail.index - 1)
    photo_lhl_1_0_0_menu.forEach(item => {
        if (item.link === window.location.hash) {
            if (photo_lhl_1_0_0_indexDetail.index <= 0) {
                photo_lhl_1_0_0_indexDetail.setIndex(item.img.length - 1)
            }
            document.querySelector('#modalPhoto').src = item.img[photo_lhl_1_0_0_indexDetail.index].large
        }
    })
}

// Xử lý xem thêm
const photo_lhl_1_0_0_handleViewMore = (length) => {
    photo_lhl_1_0_0_indexViewMore = length >= 4 ? length : 4
    document.getElementById('photo_lhl_1_0_0__root').innerHTML = photo_lhl_1_0_0_main(photo_lhl_1_0_0_menu)
}

// Xử lý mở modal
const photo_lhl_1_0_0_handleOpenModal = (smallImg, i) => {
    let img = []
    photo_lhl_1_0_0_indexDetail.setIndex(i)
    photo_lhl_1_0_0_menu.forEach(item => {
        if (item.link === window.location.hash) {
            img = item.img.filter(img => img.small === smallImg)
        }
    })
    document.getElementById('photo_lhl_1_0_0__root').insertAdjacentHTML("beforeend", photo_lhl_1_0_0_PicModal(img[0].large))
}

// Xử lý đóng modal
const photo_lhl_1_0_0_handleCloseModal = () => {
    document.querySelector('.modalphoto_lhl_1_0_0').remove()
}

// component MenuItem
const photo_lhl_1_0_0_MenuItem = (item, active) => {
    return `<li onclick="photo_lhl_1_0_0_handleChangeTab('${item.name}','${item.link}')" class="${active?'active':''}"><a href="${item.link}" >${item.name}</a></li>`
}

// component PicItem
const photo_lhl_1_0_0_PicItem = (item, i) => {
    return `<div onclick="photo_lhl_1_0_0_handleOpenModal('${item}',${i})" class="photo_lhl_1_0_0__item">
            <img width="390" height="211" src="/rs?w=193&h=129&src=${item}" alt="">
        </div>`
}

// component PicModal
const photo_lhl_1_0_0_PicModal = (img) => {
    return ` <div class="modalphoto_lhl_1_0_0">
    <div class="modalphoto_lhl_1_0_0__box">
        <div class="modalphoto_lhl_1_0_0__close" onclick="photo_lhl_1_0_0_handleCloseModal()">×</div>
        <img id="modalPhoto" src="${img}" alt="">
        <div class="modalphoto_lhl_1_0_0__control">
            <button class="modalphoto_lhl_1_0_0__prev" onClick="photo_lhl_1_0_0_prePage()"><img width="32" height="32" src="${photo_lhl_1_0_0_url}/images/arrow-icon.svg" alt=""></button>
            <button class="modalphoto_lhl_1_0_0__next"onclick="photo_lhl_1_0_0_nextPage()"><img width="32" height="32" src="${photo_lhl_1_0_0_url}/images/arrow-icon.svg" alt=""></button>
        </div>
    </div>
</div>`
}

// giao diện chính
const photo_lhl_1_0_0_main = (data) => {
        let tab = ''
        let picItem = ''
        let length = 0
        data.forEach(item => {
            if (window.location.hash === item.link) {
                length = item.img.length
            }
            tab += photo_lhl_1_0_0_MenuItem(item, window.location.hash === item.link ? true : false, length)
            for (let i = 0; i < photo_lhl_1_0_0_indexViewMore; i++) {
                if (window.location.hash === item.link) {
                    item.img.length >= photo_lhl_1_0_0_indexViewMore ?
                        picItem += photo_lhl_1_0_0_PicItem(item.img[i].small, i) : ''
                }
            }
        })
        return `<div class="container">
            <div class="photo_1_1_0">
                <div class="photo_1_1_0__content">
                    <div class="photo_lhl_1_0_0">
                        <div class="photo_lhl_1_0_0__title">Photo</div>
                        <div class="photo_lhl_1_0_0__box">
                            ${picItem}
                        </div>
                           ${length ===photo_lhl_1_0_0_indexViewMore  ?'':`<div class="photo_lhl_1_0_0__btn"><button onClick="photo_lhl_1_0_0_handleViewMore(${length})">Xem thêm</button></div>`} 
                    </div>
                </div>
                <div class="photo_1_1_0__sidebar">
                    <div class="sidebar_da_1_1_0">
                        <div class="sidebar_da_1_1_0__title">
                            <span>${photo_lhl_1_0_0_title}</span>
                            <button onclick="photo_lhl_1_0_0_handleOpenMenu()">Photo Other >></button>
                        </div>
                        ${photo_lhl_1_0_0_isOpenMenu ?`<ul class='slideIn'>${tab}</ul>`:``}
                    
                    </div>
                </div>
               ${photo_lhl_1_0_0_isOpenMenu ?`<div class="photo_1_1_0__bg" onclick="photo_lhl_1_0_0_handleOpenMenu()"></div>`:''}
            </div>
        </div>`
    }


    if(window.location.hash === '')window.location.hash=photo_lhl_1_0_0_menu[0].link
    photo_lhl_1_0_0_menu.forEach(item=>{
        if( window.location.hash===item.link) photo_lhl_1_0_0_handleChangeTab(item.name,item.link)
    })

    // click outSide
    window.onclick=(e)=>{
       if(window.innerWidth < 767 && e.target === document.querySelector('.sidebar_da_1_1_0')){
        photo_lhl_1_0_0_handleOpenMenu()
       }
       if( e.target === document.querySelector('.modalphoto_lhl_1_0_0')){
        photo_lhl_1_0_0_handleCloseModal()
       }
    }