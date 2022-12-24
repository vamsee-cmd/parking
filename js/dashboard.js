function view(click) {
    var buttons = document.getElementsByTagName("button");
    for (var i = 0; i < buttons.length; i++) {
        var name = buttons[i].id + "-view";
        if (buttons[i].id == click) {
            document.getElementById(name).style.display = "block";
        }
        else if (buttons[i].id == "") {
            continue;
        }
        else {
            document.getElementById(name).style.display = "none";
        }
    }
}

function showDistricts(s1, s2) {
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    for (var option in s2.options) {
        if (option == "select") {
            continue;
        }
        else {
            s2.remove(option);
        }
    }
    if (s1.value == "telangana") {
        var optionArray = ['select|Select', 'karimnagar|Karimnagar', 'jagityal|Jagityal'];
    }
    else if (s1.value == "andhrapradesh") {
        var optionArray = ['select|Select', 'nellore|Nellore', 'ongole|Ongole'];

    }
    for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newoption = document.createElement("option");
        newoption.value = pair[0];
        newoption.innerHTML = pair[1];
        s2.options.add(newoption);

    }
}
function showPlaces(s1, s2) {
    var s1 = document.getElementById(s1);
    var s2 = document.getElementById(s2);
    for (var option in s2.options) {
        if (option == "select") {
            continue;
        }
        else {
            s2.remove(option);
        }
    }
    if (s1.value == "karimnagar") {
        var optionArray = ['select|Select', 'prathima|Prathima Multiplex', 'mukta|Srinivasa Muktha'];
    }
    else if (s1.value == "jagityal") {
        var optionArray = ['select|Select', 'shiva|Shiva Cinemas', 'saikrishna|SaiKrishna Cinemas'];

    }
    else if (s1.value == "nellore") {
        var optionArray = ['select|Select', 'venkateshwara|Venkasteshwara Theatre', 'saikrishna|SaiKrishna Cinemas'];

    }
    else if (s1.value == "ongole") {
        var optionArray = ['select|Select', 'rajesh|Rajesh Cinemas', 'krishna|Krishna Cinemas'];

    }

    for (var option in optionArray) {
        var pair = optionArray[option].split("|");
        var newoption = document.createElement("option");
        newoption.value = pair[0];
        newoption.innerHTML = pair[1];
        s2.options.add(newoption);

    }
}