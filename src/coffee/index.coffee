require './slider'
require './menu'

$(document).ready ->
    $('.search-container').css('display', 'flex').hide()
    $('#search').click ->
        $('.search-container').fadeIn(200)

    $('.search-container').click (e) ->
        if e.target.classList.contains 'search-container'
            $(this).fadeOut 150