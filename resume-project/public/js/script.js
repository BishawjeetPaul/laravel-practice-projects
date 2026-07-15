// sidebar 
document.addEventListener("DOMContentLoaded", () => {

    const cards = document.querySelectorAll(".service-card");

    const observer = new IntersectionObserver((entries)=>{

        entries.forEach(entry=>{

            if(entry.isIntersecting){

                entry.target.classList.add("show");

                // Animate progress bars (Data Management)
                entry.target.querySelectorAll(".progress-fill").forEach(bar=>{

                    bar.style.width = bar.dataset.width + "%";

                });

            }

        });

    },{
        threshold:0.2
    });

    cards.forEach(card=>observer.observe(card));

});

// Skill page //
document.addEventListener("DOMContentLoaded",()=>{

const skills=document.querySelectorAll(".skill-item");

const observer=new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add("show");

const progress=entry.target.querySelector(".skill-progress");

progress.style.width=progress.dataset.width+"%";

const counter=entry.target.querySelector(".counter");

let start=0;

const end=parseInt(counter.dataset.target);

const timer=setInterval(()=>{

start++;

counter.innerHTML=start+"%";

if(start>=end){

clearInterval(timer);

}

},20);

observer.unobserve(entry.target);

}

});

},{threshold:.3});

skills.forEach(skill=>observer.observe(skill));

});

// Resume Page //
document.addEventListener("DOMContentLoaded",()=>{

// Scroll Animation

const reveal=document.querySelectorAll(".reveal");

const observer=new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add("active");

}

});

},{threshold:.2});

reveal.forEach(el=>observer.observe(el));

// Counter

const counters=document.querySelectorAll(".counter");

const counterObserver=new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

const counter=entry.target;

const target=parseInt(counter.dataset.target);

let value=0;

const timer=setInterval(()=>{

value++;

counter.innerHTML=value+"+";

if(value>=target){

clearInterval(timer);

}

},40);

counterObserver.unobserve(counter);

}

});

});

counters.forEach(c=>counterObserver.observe(c));

});

// Protfolio Page //
/* Scroll Animation */

const cards=document.querySelectorAll(".portfolio-item");

const observer=new IntersectionObserver(entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

const index=[...cards].indexOf(entry.target);

setTimeout(()=>{

entry.target.classList.add("show");

},index*180);

observer.unobserve(entry.target);

}

});

},{threshold:.2});

cards.forEach(card=>observer.observe(card));


/* Filter */

const filterBtns=document.querySelectorAll(".filter-btn");

filterBtns.forEach(btn=>{

btn.onclick=()=>{

document.querySelector(".filter-btn.active")
.classList.remove("active");

btn.classList.add("active");

const filter=btn.dataset.filter;

cards.forEach(card=>{

if(filter==="all"){

card.style.display="block";

}

else{

card.style.display=
card.classList.contains(filter)
?"block":"none";

}

});

};

});


/* Mouse Tilt */

document.querySelectorAll(".portfolio-card").forEach(card=>{

card.addEventListener("mousemove",e=>{

const rect=card.getBoundingClientRect();

const x=e.clientX-rect.left;

const y=e.clientY-rect.top;

const rx=((rect.height/2-y)/rect.height)*10;

const ry=((x/rect.width)-.5)*10;

card.style.transform=
`perspective(1000px)
rotateX(${rx}deg)
rotateY(${ry}deg)`;

});

card.addEventListener("mouseleave",()=>{

card.style.transform="";

});

});

// About Page //
