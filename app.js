let site = window.location.pathname;

let spikes = document.getElementById("spikes1");

let width;

//only shows credits on home page

if((site==="/my-work/")||(site==="/about-rob/")||(site==="/blog/")||(site==="/btv-album/")||(site==="/btv-book/")||(site==="/tcw-album/")) {
    document.getElementById("credits").style.visibility = "hidden";
}

/* Fixes scroll bug on Mobile Chrome.  
   No more Added Space at bottom on repeated scroll 
   on every page except /about-rob.html, which has 
   a bunch of text overflow and is unaffected.     */

function fixThatSpace() {

spikes.style.position = "absolute";
spikes.style.bottom = 0;

}

function fixFooterMargin(cssClass) {
    let footer = document.getElementById("footer");
    footer.classList.remove("fm-home");
    footer.classList.add(cssClass);
}

if(site === "/my-work/"){
    fixFooterMargin("fm-works");
} else if ((site === "/btv-album/") || (site === "/tcw-album/")){
    fixFooterMargin("fm-album");
}else if (site === "/btv-book/"){
    fixFooterMargin("fm-book");
}

console.log(site);
