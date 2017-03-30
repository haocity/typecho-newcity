var ajaxloading = true;
$(window).scroll(function() {
    if (ajaxloading) {
        var pagedz = window.location.pathname;
        if (pagedz == "/" || pagedz.indexOf("/page/") == 0 || pagedz.indexOf("/category/") == 0) {
            var url = $(".next:last>a").attr("href");
            if (url && url != document.location.href) {
                var scrollTop = $(this).scrollTop();
                var scrollHeight = $(document).height();
                var windowHeight = $(this).height();
                if (scrollTop + windowHeight + 10 >= scrollHeight) {
                   
                    ajaxloading = false;
                    $(".cssload-fond").show();
                    $.ajax({
                        url:url,
                        dataType:"html",
                        timeout:5e3,
                        beforeSend:function(xhr) {
                            xhr.setRequestHeader("X-PJAX", "true");
                        },
                        success:function(data) {
                            ajaxloading = true;
                            $(".nextpage:last").html(data);
                            var state = {
                                title:document.title,
                                url:url
                            };
                            window.history.pushState(null, document.title, url);
                            $(".page-navigator:first").remove();
                            $(".cssload-fond").hide();
                            if(typeof(Rainbow)!=="undefined") {Rainbow.color()};
                        },
                        error:function(data) {
                            console.log("eero" + data);
                            $(".cssload-fond").hide();
                        }
                    });
                }
            }
        }
    }
});