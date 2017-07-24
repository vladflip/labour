class Menu
    constructor: ->
        @menu = $('.menu')
        $('.menu > .menu-item').hover @onHover

    onHover: (e) =>
        li = $(e.target).parent()
        sub = li.find('.menu-sub')
        if sub[0]
            sub.removeClass('menu-sub--upward')

            @subScrollBottom = (sub.offset().top - $('body').scrollTop()) + sub.height()
            @subScrollTop = (sub.offset().top - $('body').scrollTop())
            @subUpwardedScrollTop = @subScrollTop - sub.height() + $(li).height()
            @subUpwardedTop = sub.offset().top - sub.height() + $(li).height()

            console.log @subUpwardedTop >= @menu.offset().top

            if @isInsideWindow() and @isUpwardedInsideMenuHeight
                sub.addClass('menu-sub--upward')

    isInsideWindow: ->
        @subScrollBottom > $(window).height() and @subUpwardedScrollTop > 0

    isUpwardedInsideMenuHeight: ->
        @subUpwardedTop >= @menu.offset().top

new Menu
