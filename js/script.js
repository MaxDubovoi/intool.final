var duration = 300;


var BrowserDetect = {
    init: function () {
        this.browser = this.searchString(this.dataBrowser) || "Other";
        this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
    },
    searchString: function (data) {
        for (var i = 0; i < data.length; i++) {
            var dataString = data[i].string;
            this.versionSearchString = data[i].subString;

            if (dataString.indexOf(data[i].subString) !== -1) {
                return data[i].identity;
            }
        }
    },
    searchVersion: function (dataString) {
        var index = dataString.indexOf(this.versionSearchString);
        if (index === -1) {
            return;
        }

        var rv = dataString.indexOf("rv:");
        if (this.versionSearchString === "Trident" && rv !== -1) {
            return parseFloat(dataString.substring(rv + 3));
        } else {
            return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
        }
    },

    dataBrowser: [
        {string: navigator.userAgent, subString: "Chrome", identity: "Chrome"},
        {string: navigator.userAgent, subString: "MSIE", identity: "Explorer"},
        {string: navigator.userAgent, subString: "Trident", identity: "Explorer"},
        {string: navigator.userAgent, subString: "Firefox", identity: "Firefox"},
        {string: navigator.userAgent, subString: "Safari", identity: "Safari"},
        {string: navigator.userAgent, subString: "Opera", identity: "Opera"}
    ]

};

BrowserDetect.init();

var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
var initFixedMenu=function(){
    var windowWidth= window.width();
    $(window).resize(function() {


    });

};

$(document).ready(function(){

    var body = $('html, body');
    $("#message-form").submit(function(e){
        e.preventDefault();
        var form_data = $(this).serialize();
        console.log(form_data);
        $.ajax({
            type: "POST",
            url: "../php/send.php",
            data: form_data,
            success: function() {
                alert('Ваше сообщение отправлено!');
            }
        });
    });
    $('.partners-blocks li').each(function(){
        var li = $(this);
        var article = li.find('.article');
        var link = li.find('.link-show-more');
        var text = article.find('p');
        var articleHeight;
        article.removeClass('hide');
        article.addClass('show');
        articleHeight = article.height();
        article.removeClass('show');
        article.addClass('hide');
        var lineHeight = 17;
        console.log((articleHeight/lineHeight));
        if((articleHeight/lineHeight)<3){
            console.log(articleHeight/lineHeight+"enter");
            link.css({
                visibility:'hidden'
        });
        }
        else{
            link.css({
                visibility:'visible'
            });

        }
        li.find('.link-show-more').click(function(e){
            e.preventDefault();
            facechange(article,link);
        });

    });
    $('.link-show-more-products').click(function(e){
        e.preventDefault();
        facechange($('.article'),$('.link-show-more-products'));
    });



    function facechange (objName,link) {
        var block = $(objName);
        if (block.hasClass('hide')) {
            hideBlock();
        } else {
           showBlock();
        }

        function hideBlock (){
            block.removeClass('hide');
            block.addClass('show');
            link.text('Скрыть');
        }

        function showBlock () {
            block.removeClass('show');
            block.addClass('hide');
            scrollToArticle();
            link.text('Подробнее...');
        }

        function scrollToArticle () {
            body.animate({scrollTop: block.offset().top}, 100);
        }
    }


});
