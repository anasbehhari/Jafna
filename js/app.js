window.onscroll = function(ev) {
    if(window.scrollY==0) {
        document.querySelector(".navbar").classList.remove("on")

    }

    if(window.scrollY <300 && document.querySelector(".fixed").classList.contains("show")) {
        document.querySelector(".fixed").classList.remove("show")
    }    
    if(window.scrollY >20 && !document.querySelector(".navbar").classList.contains("on")) {
        document.querySelector(".navbar").classList.add("on")
    }
    if(window.scrollY >500 && !document.querySelector(".fixed").classList.contains("show")) {
        document.querySelector(".fixed").classList.add("show")
    }

};