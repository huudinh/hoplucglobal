<style>
.pagination_dls_1_0_0{text-align:center;line-height:33px;padding-right:10px}.pagination_dls_1_0_0 .page_nav{padding-left:0}.pagination_dls_1_0_0 .wp-pagenavi{display:flex;justify-content:center}.pagination_dls_1_0_0 .wp-pagenavi .pages{margin:0 20px 0 0;line-height:30px}.pagination_dls_1_0_0 .wp-pagenavi .current,.pagination_dls_1_0_0 .wp-pagenavi a{border:1px solid #111;width:30px;height:30px;display:block;line-height:30px;margin:0 5px;color:#fff}.pagination_dls_1_0_0 .wp-pagenavi .current:hover,.pagination_dls_1_0_0 .wp-pagenavi a:hover{border:1px solid #fff}.pagination_dls_1_0_0 .wp-pagenavi .current{color:#fff;border:1px solid #fff}
</style>

<div class="pagination_dls_1_0_0">
    <?php
        if (function_exists("pagination")) {
                pagination($custom_query->max_num_pages,2);
            }
        ?>
</div>