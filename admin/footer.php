<style>

</style>

<script type='text/javascript' src="../styling/js/jquery-1.12.4.min.js"></script>
<script type='text/javascript' src="../styling/js/jquery-ui.min.js"></script>


<script>
$(function() {
    $(window).load(function() {
        $(".preloader").delay(800).fadeOut("slow");
    });
    $("#tabs").tabs();
});

function deleteid() {
    var id = document.getElementById('id').value;
    var vars = 'id=' + id;


    var delete_track = new XMLHttpRequest();
    var method = 'POST';
    var url = 'ajax/delete_track.php';

    delete_track.open(method, url, true);
    delete_track.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    delete_track.onreadystatechange = function() {
        if (delete_track.readyState == 4 && delete_track.status == 200) {
            var data = delete_track.responseText;
            console.log(data);
            document.getElementById('msg_p').innerHTML = data;
        }
    }

    delete_track.send(vars);
}

function search() {
    console.log('hello');
}




var btnToggle = document.querySelector(".navbar-toggler");
var close = document.querySelector(".close");
btnToggle.addEventListener('click', openNav)
var menu = document.querySelector(".menu");


function openNav() {
    $(".menu").toggle(300)
}
close.addEventListener('click', event => {
    $(".menu").toggle(300)
})
</script>