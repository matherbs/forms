
//////////////////
// SWITCH PAGES //
//////////////////

let page1    = document.getElementById("signUp");
let page2    = document.getElementById("signIn");

let style1   = document.getElementById("signOn");
let style2   = document.getElementById("signOff");

let style3   = document.getElementById("open1");
let style4   = document.getElementById("open2");


function signSwitch1() {
    page1.className="show";
    page2.className="hide";

    style1.className="signOn";
    style2.className="signOff";

    style3.className="open";
    style4.className="close";
};

function signSwitch2() {
    page2.className="show";
    page1.className="hide";

    style1.className="signOff";
    style2.className="signOn";

    style3.className="close";
    style4.className="open";
};
