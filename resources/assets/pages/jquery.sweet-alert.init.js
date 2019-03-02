
/**
* Theme: Ubold Admin Template
* Author: Coderthemes
* SweetAlert
*/

!function ($) {
    "use strict";

    var SweetAlert = function () {
    };

    //examples
    SweetAlert.prototype.init = function () {

        //Basic
        $('#sa-basic').click(function () {
            swal("پیام شما در اینجا");
        });

        //A title with a text under
        $('#sa-title').click(function () {
            swal("پیام شما در اینجا", "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.")
        });

        //Success Message
        $('#sa-success').click(function () {
            swal("پیام شما در اینجا", "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد." ,"success")
        });

        //Warning Message
        $('#sa-warning').click(function () {
            swal({
                title: "ایا شما مطمئن هستید؟",
                text: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: 'btn-warning',
                confirmButtonText: "بله حذف کن",
                closeOnConfirm: false
            }, function () {
                swal("حذف شد!", "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است", "success");
            });
        });

        //Parameter
        $('#sa-params').click(function () {
            swal({
                title: "ایا شما مطمئن هستید؟",
                text: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "بله حذف کن",
                cancelButtonText: "خیر!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                    swal("حذف شد!", "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است", "success");
                } else {
                    swal("لغوشد", "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است)", "error");
                }
            });
        });

        //Custom Image
        $('#sa-image').click(function () {
            swal({
                title: "Sweet!",
                text: "این یک تصویر سفارشی است",
                imageUrl: "assets/plugins/bootstrap-sweetalert/thumbs-up.jpg"
            });
        });

        //Auto Close Timer
        $('#sa-close').click(function () {
            swal({
                title: "خروج خودکار هشدار!",
                text: "خروج بعد از دوثانیه",
                timer: 2000,
                showConfirmButton: false
            });
        });

        //Primary
        $('#primary-alert').click(function () {
            swal({
                title: "ایا شما مطمئن هستید؟",
                text: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است",
                type: "info",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-primary btn-md waves-effect waves-light',
                confirmButtonText: 'اولیه!'
            });
        });

        //Info
        $('#info-alert').click(function () {
            swal({
                title: "ایا شما مطمئن هستید؟",
                text: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است",
                type: "info",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-info btn-md waves-effect waves-light',
                confirmButtonText: 'اطلاع!'
            });
        });

        //Success
        $('#success-alert').click(function () {
            swal({
                title: "ایا شما مطمئن هستید؟",
                text: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است",
                type: "success",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-success btn-md waves-effect waves-light',
                confirmButtonText: 'موفقیت!'
            });
        });

        //Warning
        $('#warning-alert').click(function () {
            swal({
                title: "ایا شما مطمئن هستید؟",
                text: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-warning btn-md waves-effect waves-light',
                confirmButtonText: 'هشدار!'
            });
        });

        //Danger
        $('#danger-alert').click(function () {
            swal({
                title: "ایا شما مطمئن هستید؟",
                text: "لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است",
                type: "error",
                showCancelButton: true,
                cancelButtonClass: 'btn-white btn-md waves-effect',
                confirmButtonClass: 'btn-danger btn-md waves-effect waves-light',
                confirmButtonText: 'خطر'
            });
        });


    },
        //init
        $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing
    function ($) {
        "use strict";
        $.SweetAlert.init()
    }(window.jQuery);