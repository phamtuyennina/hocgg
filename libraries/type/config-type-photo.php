<?php
    /* Background */
    $nametype = "background";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Background";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['background'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 900;
    $config['photo']['photo_static'][$nametype]['height'] = 300;
    $config['photo']['photo_static'][$nametype]['thumb'] = '900x300x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Banner */
    $nametype = "banner";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Banner";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 730;
    $config['photo']['photo_static'][$nametype]['height'] = 120;
    $config['photo']['photo_static'][$nametype]['thumb'] = '730x120x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 120;
    $config['photo']['photo_static'][$nametype]['height'] = 100;
    $config['photo']['photo_static'][$nametype]['thumb'] = '120x100x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 48;
    $config['photo']['photo_static'][$nametype]['height'] = 48;
    $config['photo']['photo_static'][$nametype]['thumb'] = '48x48x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Watermark */
    $nametype = "watermark";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 50;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '50x50x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

    /* Watermark tin t???c */
    $nametype = "watermark-news";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark tin t???c";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 50;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '50x50x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';

    /* Video */
    $nametype = "video";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Video";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['video'] = true;
    $config['photo']['photo_static'][$nametype]['tieude'] = true;
    $config['photo']['photo_static'][$nametype]['mota'] = true;
    $config['photo']['photo_static'][$nametype]['noidung'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 250;
    $config['photo']['photo_static'][$nametype]['height'] = 150;
    $config['photo']['photo_static'][$nametype]['thumb'] = '250x150x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Popup */
    $nametype = "popup";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Popup";
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['tieude'] = true;
    $config['photo']['photo_static'][$nametype]['link'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 800;
    $config['photo']['photo_static'][$nametype]['height'] = 530;
    $config['photo']['photo_static'][$nametype]['thumb'] = '800x530x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 600;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Slideshow product */
    $nametype = "slide-product";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow s???n ph???m";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 600;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* M???ng x?? h???i */
    $nametype = "mangxahoi";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "M???ng x?? h???i";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 30;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 30;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '30x30x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* M???ng x?? h???i 1 */
    $nametype = "mangxahoi1";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "M???ng x?? h???i 1";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 30;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 30;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '30x30x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* M???ng x?? h???i 2 */
    $nametype = "mangxahoi2";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "M???ng x?? h???i 2";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 35;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 35;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '35x35x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';

    /* Video */
    $nametype = "video";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Video";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("noibat" => "N???i b???t");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['video_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;

    /* ?????i t??c */
    $nametype = "doitac";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "?????i t??c";
    $config['photo']['man_photo'][$nametype]['number_photo'] = 5;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['tieude_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 175;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 95;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '175x95x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif|.JPG|.PNG|.JPEG|.Png|.GIF';
?>