// component photo
const photoCard = (data, index) => {
    (index == 0) ? className = 'album_lhl_1_0_0__pic--big': className = '';
    return `
        <div class="album_lhl_1_0_0__pic ${className}">
            <img src="${data.image}" class="modal-btn" onclick="popupPhoto(dataSlide, ${index})" alt="${data.text}">
        </div>
    `;
}

// Component list
const listCard = (data, index) => {
    return `
        <div class="album_lhl_1_0_0__item">
            <img src="${data.image}" class="modal-btn" onclick="popupPhoto(dataSlide, ${index})" alt="${data.text}" />
        </div>
    `;
}

// Render List card
function renderList(data) {
    for (let i = 0; i < data.length; i++) {
        document.getElementById('album_lhl_1_0_0__list').insertAdjacentHTML('beforeend', listCard(data[i], i))
    }
}
renderList(dataSlide);

// compoinent modal popup
const modalPop = (link) => {
    return `
      <div class="modal" id="modal-pic" style="display:flex">
          <div class="modal-closePic" id="modal-closePic">×</div>
          <div class="modal-bg" id="modal-bg"></div>
          <div class="modal-box modal-box-img animate-zoom">
              <div class="modal-pic" style="text-align:center">
                    <div class="album"></div>
                <div class="album__control">
                    <button class="album__arrow album__arrow--prev"><i class="icon-angle-left"></i></button>
                    <button class="album__arrow album__arrow--next"><i class="icon-angle-right"></i></button>
                </div>
              </div>
          </div>
      </div>
    `;
};

function popupPhoto(data, index) {
    document.querySelector('#album_lhl_1_0_0').insertAdjacentHTML('beforebegin', modalPop())
    createSlider(data, index);
    document.querySelector('#modal-closePic').addEventListener('click', () => {
        document.querySelector('#modal-pic').remove();
    });
    document.querySelector('#modal-bg').addEventListener('click', () => {
        document.querySelector('#modal-pic').remove();
    });
}


// compoinent slide
const slideCard = (data) => {
    return `
        <div class="album__item ">
            <img class="album__image" src="${data.image}" alt="${data.text}">
            <p class="album__text">${data.text}</p>
        </div>
    `;
};


function createSlider(data, index) {
    for (let i = 0; i < data.length; i++) {
        let album = document.querySelector('.album');
        if (i < 2) {
            album.innerHTML += slideCard(data[index]);
        }
        if (index == data.length - 1) {
            index = 0;
        } else {
            index++;
        }
    }

    const btnNext = document.getElementsByClassName('album__arrow--next');
    const btnPrev = document.getElementsByClassName('album__arrow--prev');
    const img = document.getElementsByClassName('album__image');
    const text = document.getElementsByClassName('album__text');
    let i = 0;
    btnNext[0].addEventListener("click", function() {
        plusDivs(1);
        i++;
        for (let x = 0; x < img.length; x++) {
            if (i >= data.length) {
                i = 0;
            }
            img[x].setAttribute('src', data[i].image);
            text[x].innerText = data[i].text;
        }

    });
    btnPrev[0].addEventListener('click', function() {
        plusDivs(-1);
        i--;
        for (let x = 0; x < img.length; x++) {
            if (i <= -1) {
                i = data.length - 1;
            }
            img[x].setAttribute('src', data[i].image);
            text[x].innerText = data[i].text;
        }
    })
    let albumIndex = 1;
    showDivs(albumIndex);

    function plusDivs(n) {
        showDivs(albumIndex += n);
    }

    function showDivs(n) {
        let i;
        let x = document.getElementsByClassName("album__item");
        if (n > x.length) { albumIndex = 1 }
        if (n < 1) { albumIndex = x.length }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[albumIndex - 1].style.display = "block";
    }
}

const ytCard = (id) => {
    return `
        <iframe src="//www.youtube.com/embed/${id}?rel=0&autoplay=1&mute=1" name="youtube embed" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    `;
}

let clips = document.getElementsByClassName('popupyt_1_0_0');
for(let i = 0; i < clips.length; i++){
    clips[i].addEventListener('click', () => {
        const id = clips[i].getAttribute('data-video');
        clips[i].innerHTML = ytCard(id);
        clips[i].classList.add('active');
    })
}