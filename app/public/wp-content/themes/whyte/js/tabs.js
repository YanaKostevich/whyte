// const headerItem = document.querySelectorAll('.header__item');
// const mainContent = document.querySelectorAll('.main__content');

// for (let item of headerItem){
//     item.addEventListener('click', function(){
//         for (let element of mainContent){
//             element.classList.add('hidden')
//         }
//         const content = document.querySelector('#' + item.dataset.tab);
//         content.classList.remove('hidden')
//     })
// }
// const tabs = document.querySelector(".wrapper");
// const tabButton = document.querySelectorAll(".tab-button");
// const contents = document.querySelectorAll(".content");

// tabs.onclick = e => {
//   const id = e.target.dataset.id;
//   if (id) {
//     tabButton.forEach(btn => {
//       btn.classList.remove("active");
//     });
//     e.target.classList.add("active");

//     contents.forEach(content => {
//       content.classList.remove("active");
//     });
//     const element = document.getElementById(id);
//     element.classList.add("active");
//   }
// }
let tabNavs = document.querySelectorAll(".nav-tab");
let tabPanes = document.querySelectorAll(".tab-pane");

for (let i = 0; i < tabNavs.length; i++) {

  tabNavs[i].addEventListener("click", function(e){
    e.preventDefault();
    let activeTabAttr = e.target.getAttribute("data-tab");

    for (let j = 0; j < tabNavs.length; j++) {
        let contentAttr = tabPanes[j].getAttribute("data-tab-content");

      if (activeTabAttr === contentAttr) {
        tabNavs[j].classList.add("active");
        tabPanes[j].classList.add("active"); 
      } else {
        tabNavs[j].classList.remove("active");
        tabPanes[j].classList.remove("active");
      }
    };
  });
}