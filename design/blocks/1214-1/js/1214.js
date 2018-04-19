jQuery(document).ready(function($) {
            var $filter = $('.navbar');
            var $filterSpacer = $('<div />', {
                "class": "vnkings-spacer",
                "height": $filter.outerHeight()
            });
            if ($filter.size())
            {
                $(window).scroll(function ()
                {
                    if (!$filter.hasClass('fix') && $(window).scrollTop() > 0)
                    {
                        $filter.before($filterSpacer);
                        $filter.addClass("fix");
                    }
                    else if ($filter.hasClass('fix')  && $(window).scrollTop() == 0)
                    {
                        $filter.removeClass("fix");
                        $filterSpacer.remove();
                    }
                });
            }
            $(".search-bar").click(function () {
                if($(".search-box").hasClass("appear"))
                {
                    $(".search-box").removeClass("appear");
                    $(".search-bar").removeClass("pb");
                }
                else
                {
                    $(".search-box").addClass("appear");
                    $(".search-bar").addClass("pb");
                }
            });
        });