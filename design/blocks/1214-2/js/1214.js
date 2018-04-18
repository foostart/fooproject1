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
            var $fill = $('.navbar-default');
            if ($fill.size())
            {
                $(window).scroll(function ()
                {
                    if (!$filter.hasClass('fix-nav') && $(window).scrollTop() > 0)
                    {
                        $filter.before($filterSpacer);
                        $filter.addClass("fix-nav");
                    }
                    else if ($filter.hasClass('fix-nav')  && $(window).scrollTop() == 0)
                    {
                        $filter.removeClass("fix-nav");
                        $filterSpacer.remove();
                    }
                });
            }
        });
