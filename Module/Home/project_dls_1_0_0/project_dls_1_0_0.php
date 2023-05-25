<?php
    if($check == 0){
        include(locate_template("Module/Home/project_dls_1_0_0/project_dls_1_0_0_css.php")); 
    }
?>      
<section class="project_dls_1_0_0 ">
    <div class="container">
        <div class="main_dls_1_0_0__title fadeInUp load"><?php echo $field['project_title'] ?></div>
        <div class="main_dls_1_0_0__line fadeInUp load"></div>
        <div id="project_dls_1_0_0__content" class="project_dls_1_0_0__content fadeInUp load"></div>
        <a style="color:#fff" class="project_dls_1_0_0__more fadeInUp load" href="/projects/">MORE PROJECTS</a>
    </div>
</section>
    
<script>
    const data = [
        <?php 
            $content = $field['data'];
            foreach( $content as $key => $image ):
                echo '
                    {
                        name: "'.$image['title'].'",
                        link: "'.$image['caption'].'",
                        place: "'.$image['alt'].'",
                        photo: "'.$image['url'].'",
                        des: "'.$image['description'].'",
                    },
                ';
            endforeach;
        ?>
    ];
    const recruitCard = (data, index) => {
        let itemStyle, textStyle;
        if(index % 2 == 0){
            itemStyle = 'project_dls_1_0_0__item--right';
            textStyle = 'project_dls_1_0_0__text--right';
        } else {
            itemStyle = 'project_dls_1_0_0__item--left';
            textStyle = 'project_dls_1_0_0__text--left';

        }

        index++;

        return `
            <div class="project_dls_1_0_0__item ${itemStyle}">
                <a class="project_dls_1_0_0__pic" href="${data.link}">
                    <img width="720" height="480" src="${data.photo}" alt="photo" />
                </a>
                <div class="project_dls_1_0_0__text ${textStyle}">
                    <div class="project_dls_1_0_0__num">
                        0${index}.
                    </div>
                    <a class="project_dls_1_0_0__name" href="${data.link}">
                    ${data.name}
                    </a>
                    <div class="project_dls_1_0_0__place">
                    ${data.place}
                    </div>
                    <div class="project_dls_1_0_0__des">
                    ${data.des}
                    </div>
                </div>
            </div>
        `;
    };

    const noData = `<div>Không có dữ liệu</div>`;
    const render = (data) => {
    if (data.length === 0) {
        document.getElementById("project_dls_1_0_0__content").innerHTML = noData;
        document.getElementsByClassName(
        "project_dls_1_0_0__more"
        )[0].style.display = "none";
    } else {
        function loop(key) {
        document.getElementById("project_dls_1_0_0__content").innerHTML = "";
        for (let i = 0; i < data.length; i++) {
            if (i <= key) {
            document.getElementById("project_dls_1_0_0__content").innerHTML +=
                recruitCard(data[i], i);
            document.getElementsByClassName(
                "project_dls_1_0_0__more"
            )[0].style.display = "table";
            }
            // if (key + 2 > data.length) {
            // document.getElementsByClassName(
            //     "project_dls_1_0_0__more"
            // )[0].style.display = "none";
            // }
        }
        }
        // chay lan dau
        // loop(2);
        loop(data.length);
        let count = 2;
        const counter = () => loop((count += 2));
        // xử ly click more
        // document
        // .getElementsByClassName("project_dls_1_0_0__more")[0]
        // .addEventListener("click", () => {
        //     counter();
            
        // });
    }
    };

    // get All Data
    render(data);
</script>