
// responsive menu
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav_menu");
const body = document.querySelector("body");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    document.querySelector(".header_wrap").classList.toggle("active");
}

//remove nbsp;
if (window.matchMedia('(max-width: 1300px)').matches) {
    var str = $('.form h1').html();
    str = str.replace(/&nbsp;/g, ' ');
    $('.form h1').html(str);
}
//replace video
if (window.matchMedia('(max-width: 1200px)').matches) {
    var heading = $('.form h1');
    $(".intro .wrapper").prepend(heading);
}
//change text
if (window.matchMedia('(max-width: 767px)').matches) {
    $(".investment-sum").html('Впишите сумму инвестирования')
    $(".result-sum").html('Прогнозируемый чистый заработок')
}

// dropdown
$("li.dropdown").click(function () {
    navMenu.classList.toggle("active");
    hamburger.classList.toggle("active");
    document.querySelector(".header_wrap").classList.remove("active");
});
//play video
$(".play").click(function () {
    $(".video").html('<iframe src="https://player.vimeo.com/video/658587851?h=2d71593345&autoplay=1&loop=1&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe><script src="https://player.vimeo.com/api/player.js"></script>\n');
    $(".video").addClass("active");
});

//
//calculator
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
}

$("input.investment").on("keyup", function () {
    this.value = this.value.replace(/ /g, '');
    var number = this.value.replace(/\D/g, "");
    this.value = number.replace(/\B(?=(\d{3})+(?!\d))/g, " ");
    if ($("input.investment").val() == "") {
        document.getElementById("result").innerText = "9 700$";
    } else {
        document.getElementById("result").innerText =
            formatNumber((this.value.replace(' ', '') * 24.25).toFixed(0)) + "$";
    }
});

//data
var dealsWrapper = document.getElementById("deals_wrapper");
var arrOfUsersName = [
    "kissr39", "hunter201l", "btcman", "wolawdra", "atoroloue", "ginter43", "escospit", "splitter92", "nomonkey45", "ustrella", "AMpeRpIt", "nAShayEt", "ReadyCircleHawk",
    "ZeroBroken", 'TimePast', 'FutureDev', 'Fly', 'Falling56', 'Cliff79', 'MountainBlue', 'Gold_Demon', 'DemonicPanda98', 'Cat', 'XX_998Bandit', 'FearLight', 'Glow**Tread', 'kgjhko7',
    "nnifhsmujhgphi", "eniacddat", "lolwohlaprul", "rptaotrieeiskastc", "mianigeelkp", "iknttlinymeu", "pecenaitmoestsn", "ajddeootsihgn", "belosatulrlsco", "leddonmdro", "apacnithlow",
    "openydiU0", "necoerodr", "ematadcitcs", "eddceautaacrbardu", "hrdaionalgoh", "lpeeoyrmortetyna", "rbbrareyapnertap", "ceoplcocrodei", "ecdicamattnwey", "ogizniagnhtroc",
    "painte56765r", "butche#52r", "harpist", "senator&jhs", "sheriffjhg", "glazieFTGr", "soldie0r", "gambler", "analyst562", "actuary&*", "__workman", "trust)(ee", "cou)9ikrier", "manager_ttt",
    "student98", "cobbleru8", "strike^gdr", "pfdgldRjumb_8er", "tour79oist", "acrobat", "audhitor", "servant&o", "chemist56w"
]
let ArrOfUsersNum = [];

function renderDeals() {
    for (let i = 0; i < 6; i++) {
        let deal = document.createElement("div");
        deal.className = "table-row";
        let random_num = Math.floor(Math.random() * 11);
        let random_sum = (Math.random() * (243000 - 8000) + 8000).toFixed(0);
        let random_user_num = Math.floor(Math.random() * arrOfUsersName.length);
        while(ArrOfUsersNum.includes(random_user_num)){
            random_user_num = Math.floor(Math.random() * arrOfUsersName.length);
        }
        ArrOfUsersNum.push(random_user_num);
        let random_user = arrOfUsersName[random_user_num];

        let imgSrc = arrOfData[random_num].img_src;
        let name = arrOfData[random_num].name;
        let today = new Date();
        let date = today.getDate();
        let month = today.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
        let year = today.getFullYear();
        let day = date + "." + month + "." + year;
        today.setSeconds(today.getSeconds() + i - 2);
        let time =
            today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        deal.innerHTML = ` <div class="date">${day},<br> ${time}</div>
                        <div class="country"><img src="${imgSrc}"><span>${name}</span></div>
                        <div class="user">${random_user}</div>
                        <div class="sum">$${formatNumber(random_sum)}</div>`
        dealsWrapper.appendChild(deal);
        deal.setAttribute("id", "first_deal");
    }
}

renderDeals();
let secondsInterval = 4000;

function addTransaction() {
    secondsInterval = (Math.random() * (9000 - 4000) + 4000).toFixed(0);
    setInterval(function () {
        let deal = document.createElement("div");
        deal.className = "table-row";
        let random_num = Math.floor(Math.random() * 11);
        let random_user_num = Math.floor(Math.random() * arrOfUsersName.length);
        ArrOfUsersNum.shift();
        while(ArrOfUsersNum.includes(random_user_num)){
            random_user_num = Math.floor(Math.random() * arrOfUsersName.length);
        }
        ArrOfUsersNum.push(random_user_num);

        let random_user = arrOfUsersName[random_user_num];
        let random_sum = (Math.random() * (243000 - 8000) + 8000).toFixed(0);
        let imgSrc = arrOfData[random_num].img_src;
        let name = arrOfData[random_num].name;
        let today = new Date();
        let date = today.getDate();
        let month = today.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
        let year = today.getFullYear();
        let day = date + "." + month + "." + year;
        let time =
            today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        deal.innerHTML = ` <div class="date">${day},<br> ${time}</div>
                        <div class="country"><img src="${imgSrc}"><span>${name}</span></div>
                        <div class="user">${random_user}</div>
                        <div class="sum">$${formatNumber(random_sum)}</div>`
        dealsWrapper.appendChild(deal);
        deal.setAttribute("id", "first_deal");
        dealsWrapper.removeChild(document.getElementById("first_deal"));
    }, secondsInterval);
};
addTransaction();