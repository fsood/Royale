const tabsBtn   = document.querySelectorAll(".tabs__nav-btn");
const tabsItems = document.querySelectorAll(".tabs__item");



tabsBtn.forEach(onTabClick);

function onTabClick(item) {
    item.addEventListener("click", function() {
        let currentBtn = item;
        let tabId = currentBtn.getAttribute("data-tab");
        let currentTab = document.querySelector(tabId);

        if( ! currentBtn.classList.contains('active') ) {
            tabsBtn.forEach(function(item) {
                item.classList.remove('active');
            });
    
            tabsItems.forEach(function(item) {
                item.classList.remove('active');
            });
    
            currentBtn.classList.add('active');
            currentTab.classList.add('active');

            
        }
    });
}


document.querySelector('.tabs__nav-btn').click();

const tabsBtn1   = document.querySelectorAll(".tabs__nav-btn--2");
const tabsItems1 = document.querySelectorAll(".tabs__item2");
const tabsItems2 = document.querySelectorAll(".podcontent");





tabsBtn1.forEach(onTabClick1);

function onTabClick1(item) {
    item.addEventListener("click", function() {
        let currentBtn = item;
        let tabId = currentBtn.getAttribute("data-tab");
        let currentTab = document.querySelector(tabId);

        if( ! currentBtn.classList.contains('actives') ) {
            tabsBtn1.forEach(function(item) {
                item.classList.remove('actives');
            });
    
            tabsItems1.forEach(function(item) {
                item.classList.remove('actives');
            });
    
            currentBtn.classList.add('actives');
            currentTab.classList.add('actives');

            
        }
    });
}


document.querySelector('.tabs__nav-btn--2').click();
