window.onscroll = function(ev) {
    if(window.scrollY==0) {
        document.querySelector(".navbar").classList.remove("on")
    }
  if(window.scrollY >20 && !document.querySelector(".navbar").classList.contains("on")) {
        document.querySelector(".navbar").classList.add("on")
    }
    if(document.querySelector(".fixed")) {
        if(window.scrollY <600 && document.querySelector(".fixed").classList.contains("show")) {
            document.querySelector(".fixed").classList.remove("show")
        }    
      
        if(window.scrollY >500 && !document.querySelector(".fixed").classList.contains("show")) {
            document.querySelector(".fixed").classList.add("show")
        }
    }

};
let scrollbar = document.querySelectorAll(".blog-navbar")
if(scrollbar) {
    scrollbar.forEach(el => {
        el.scrollTo(el.offsetWidth,0)
    })
}
let mobile_hamburger  = document.querySelector(".hamburger");
let mobile_menu = document.querySelector(".mobile-menu");
mobile_hamburger.onclick = () => {
mobile_menu.classList.toggle("on");
}