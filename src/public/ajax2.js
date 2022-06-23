function scroll() {
        window.scrollTo(0, 50000);
}
setTimeout(scroll, 800)
function ajax() {
        let req = new XMLHttpRequest();
        req.onreadystatechange = function () {
                if (req.readyState == 4 && req.status == 200) {
                        document.querySelector(".comments").innerHTML = req.responseText;
                }
        }
        req.open('GET', "list.php", true);
        req.send();
}
setInterval(function() {ajax()}, 1650)
function post() {
        $.post("create.php",
  {
    comment: document.querySelector('.cm').value
  })
        if (document.querySelector('.cm').value.toLowerCase() != "nigga" && document.querySelector('.cm').value.toLowerCase() != 'niga') {
        $('.cm').attr('placeholder', 'Start writting')
                document.querySelector('.cm').value = "";
        } else {
                $('.cm').attr('placeholder', 'Illegal word')
                document.querySelector('.cm').value = "";
        }
        ajax();
				setTimeout(scroll, 800)
}
$("*").keydown(function (event) {
        if (event.which == 13) {
                post();
        }
})
if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
}
function botJoinDelete() {
        $.post("joindelete.php",
  {
    code: "chat_delete_x"
  })
}