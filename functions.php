<?php
// Đoạn mã PHP này là một phần của một theme WordPress, dùng để tải các file CSS và JavaScript cần thiết cho giao diện
function load_assets() {
    // Css
    wp_enqueue_style("font","//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i",array  (),"1.0","all");
    wp_enqueue_style("bootstrapcss",'//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array(),"1.1","all");//bootstrap
    wp_enqueue_style("maincss",get_theme_file_uri("/build/index.css"),array(),"1.0.2","all");
    wp_enqueue_style("mainstylecss",get_theme_file_uri("/build/style-index.css"),array(),"1.0.3","all");    

    //Js
    wp_enqueue_script("mainscrip",get_theme_file_uri("/build/index.js"),array('jquery'),1.0,true);//array('jquery') xác định rằng file này phụ thuộc vào jQuery.
}
add_action("wp_enqueue_scripts","load_assets");
// Hooks là các điểm móc cho phép bạn gắn thêm chức năng tùy chỉnh vào các điểm khác nhau trong quá trình chạy của WordPress mà không cần chỉnh sửa lõi của WordPress. Có hai loại hooks chính:
// Actions: Cho phép bạn thêm các chức năng.
// Filters: Cho phép bạn thay đổi dữ liệu.