equalWideBlockHeight = function () {
    if ($('.wide-block').length) //sliceheight for wide block
    {
        if (window.matchMedia('(min-width: 768px)').matches) {
            $('.wide-block').each(function () {
                $(this).css('height', '');
                var _this = $(this),
                    parent_block = _this.closest('.items'),
                    block_height = _this.actual('outerHeight', { includeMargin: true }) - 1,
                    margin = parseInt($('.wide-block').css('margin-bottom')),
                    equal_height = 0;

                if (parent_block.find('.col-item').length) {
                    parent_block.find('.col-item .item').css('height', '');
                    parent_block.find('.col-item').each(function () {
                        equal_height += $(this).find('.item').actual('outerHeight', { includeMargin: true });
                    })

                    if (equal_height) {
                        equal_height -= margin;
                        if (equal_height >= block_height)
                            _this.css('height', equal_height);
                        else {
                            equal_height += margin;
                            var last_item = parent_block.find('.col-item:last-child .item');
                            last_item.css('height', (last_item.actual('outerHeight') + (block_height - equal_height)));
                        }
                    }
                }
            })
        }
        else {
            $('.wide-block').css('height', '');
            $('.col-item .item').css('height', '');
        }
    }
}
zenColours = function () {
    var
        ac = new FastAverageColor(),
        items = document.querySelectorAll('.item');

    for (var i = 0; i < items.length; i++) {
        var item = items[i],
            image = item.querySelector('img.stories_prev');
        if (image) {
            var
                isBottom = item.classList.contains('item_bottom'),
                gradient = item.querySelector('.item__gradient'),
                gradientElse = item.querySelector('.item__gradient_horizontal'),
                height = image.naturalHeight,
                size = 50,
                color = ac.getColor(image, isBottom ? { top: height - size, height: size } : { height: size }),
                colorEnd = [].concat(color.value.slice(0, 3), 0).join(','),
                colorFive = [].concat(color.value.slice(0, 3), 0.5).join(','),
                colorSeven = [].concat(color.value.slice(0, 3), 0.7).join(',');

            item.style.background = color.rgb;
            item.style.color = color.isDark ? 'white' : 'black';

            if (isBottom) {
                gradient.style.background = 'linear-gradient( to top, ' +
                    color.rgba + ' 0%,' + color.rgba + ' 50%,rgba(' + colorSeven + ') 70%,rgba(' + colorFive + ') 100% )';
                gradientElse.style.background = 'linear-gradient( to right, ' +
                    color.rgba + ' 0%,' + color.rgba + ' 50%,rgba(' + colorSeven + ') 70%,rgba(' + colorFive + ') 100% )';
            } else {
                gradient.style.background = 'linear-gradient(to top, ' +
                    'rgba(' + colorEnd + ') 0%, ' + color.rgba + ' 100%)';
            }
        } else {
            item.style.color = 'black';
        }
    }
}

$(document).ready(function () {
    BX.onCustomEvent('onWindowResize', false);
    equalWideBlockHeight();
    // zenColours();
    // console.log(1);
    $('.banners-small.blog img.stories_prev').on('load', function () {
        $('.banners-small .item.normal-block').sliceHeight();
        equalWideBlockHeight();
    });

})

BX.addCustomEvent('onWindowResize', function (eventdata) {
    try {
        ignoreResize.push(true);
        equalWideBlockHeight();
    }
    catch (e) { }
    finally {
        ignoreResize.pop();
    }
});
BX.addCustomEvent('onCompleteAction', function (eventdata) {
    if (eventdata.action === 'ajaxContentLoaded') {
        $(eventdata.content).find('.item').each(function () {
            $('.banners-small.blog img.stories_prev').on('load', function () {
                equalWideBlockHeight();
                // zenColours();
                $('.banners-small .item.normal-block').sliceHeight();
            });
        })
        setTimeout(function () {
            equalWideBlockHeight();
        }, 350);
    }
});

window.addEventListener('load', function () {

}, false);