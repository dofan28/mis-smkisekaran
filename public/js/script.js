   // Scroll Indicator
   window.addEventListener('scroll', function () {
       var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
       var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
       var scrolled = (winScroll / height) * 100;
       document.getElementById("scrollIndicator").style.transform = "scaleX(" + scrolled / 100 + ")";
   });
