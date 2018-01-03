function openNav() { document.getElementById("mySidenav").style.width = "100px"; }

function closeNav() { document.getElementById("mySidenav").style.width = "0"; }


window.onload = function() {
    document.addEventListener("DOMContentLoaded",
        function() {
            var div, n,
                v = document.getElementsByClassName("youtube-player");
            for (n = 0; n < v.length; n++) {
                div = document.createElement("div");
                div.setAttribute("data-id", v[n].dataset.id);
                div.innerHTML = labnolThumb(v[n].dataset.id);
                div.onclick = labnolIframe;
                v[n].appendChild(div);
            }
        });

    function labnolThumb(id) {
        var thumb = '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">',
            play = '<div class="play"></div>';
        return thumb.replace("ID", id) + play;
    }

    function labnolIframe() {
        var iframe = document.createElement("iframe");
        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
        iframe.setAttribute("frameborder", "0");
        iframe.setAttribute("allowfullscreen", "1");
        this.parentNode.replaceChild(iframe, this);
    }

}

(function(exports) {
    exports.githubStars = function(repo, callback) {
        var xmlhttp = new XMLHttpRequest(),
            url = ["https://api.github.com"],
            useCallback = (typeof(callback) == "function");

        //count the stars
        function countStars(response) {
            //don't care, just make it an array
            if (!(response instanceof Array)) {
                response = [response];
            }
            //start the count
            var stars = 0;

            for (var i in response) {
                stars += parseInt(response[i].stargazers_count);
            }

            return stars;
        }

        //determine if we're looking at a collection or a single repo
        repo = repo.split("/");

        if (repo.length === 1) {
            url.push("users", repo[0], "repos");
        } else {
            url.push("repos", repo[0], repo[1]);
        }

        //check if we were given a callback, if so we set that up
        if (useCallback) {
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    callback(countStars(JSON.parse(xmlhttp.responseText)));
                }
            }
        }

        xmlhttp.open("GET", url.join("/"), useCallback);
        //set the github media header
        xmlhttp.setRequestHeader("Accept", "application/vnd.github.v3+json");
        xmlhttp.send();

        if (!useCallback) {
            //no callback, just wait for the response
            return countStars(JSON.parse(xmlhttp.responseText));
        }
    }
})(typeof exports !== 'undefined' ? exports : window);



var Agile_API = Agile_API || {};
Agile_API.on_after_load = function() {
    _agile.set_account('ofv20gusf2tbcdnmiuo68v5sun', 'cloudbyte');
    _agile.track_page_view();
    _agile_execute_web_rules();
};

window.ga = window.ga || function() {
    (ga.q = ga.q || []).push(arguments)
};
ga.l = +new Date;
ga('create', 'UA-92076314-2', 'auto');
ga('send', 'pageview');