var loclength = 0;
var wwidth = $(window).width();
var reponame = new Set();
var uniqueuser = new Set();
var allunicontri = [];
var alllocation = [];
var allcordinate = [];
reponame.add('openebs');
reponame.add('maya');
reponame.add('jiva');
reponame.add('elves');
reponame.add('mayaserver');
reponame.add('easy-jupyter');
reponame.add('longhorn');
reponame.add('mvol');
reponame.add('specs');

$('#ghapidata').html('<div id="loader"><img src="css/loader.gif" alt="loading..."></div>');
var repositories1;

function allcontibutor() {
    var i = 0;
    var contributor;
    for (let listrepo of reponame) {

        var contbutorurl = 'https://api.github.com/repos/openebs/' + listrepo + '/contributors?client_id=db5e3e3ede4e4174e0d6&client_secret=fdaad534cddc7373daf361a4d9d447ecdfb125ed';
        var outhtml2 = '<ul>';
        $.getJSON(contbutorurl, function(json) {
            contributor = json;
            outputPageContent();

        });

        function outputPageContent() {

            if (contributor.length == 0) {
                outhtml2 = outhtml2 + '<p>No contibutors!</p></div>';
            } else {

                $.each(contributor, function(index) {

                    if (!uniqueuser.has(contributor[index].login)) {

                        var uobj = {
                            name: contributor[index].login,
                            imgurl: contributor[index].avatar_url + '&s=30'
                        };
                        allunicontri.push(i, uobj);
                        uniqueuser.add(contributor[index].login);

                    }
                    i++;
                });

            }

            if (listrepo == 'openebs') {
                var contbutorurl = 'https://api.github.com/repos/openebs/' + listrepo + '/contributors?client_id=db5e3e3ede4e4174e0d6&client_secret=fdaad534cddc7373daf361a4d9d447ecdfb125ed&page=2';
                var outhtml2 = '<ul>';
                $.getJSON(contbutorurl, function(json) {
                    contributor = json;
                    outputPageContent();

                });
            }
        }

    }
}

allcontibutor();

function bcrousel() {

    // var openebscontri;
    // if ($(window).width() <= 360) {
    //     openebscontri = 48;
    // } else if ($(window).width() <= 480) {
    //     openebscontri = 60;
    // } else if ($(window).width() < 600) {
    //     openebscontri = 37;
    // } else if ($(window).width() <= 1200) {
    //     openebscontri = 40;

    // } else if ($(window).width() < 1536) {
    //     openebscontri = 45;
    // } else {
    //     openebscontri = 50;
    // }

    // var p = 0;
    var outhtmlb = '';
    // outhtmlb = outhtmlb + '<div id="carouselExampleControls1" class="carousel slide " data-ride="carousel" style="display:flex;justify-content:center;">';
    // outhtmlb = outhtmlb + '<div class="carousel-inner mycarousel" role="listbox" >';
    // outhtmlb = outhtmlb + '<div class="carousel-item active " style="">';

    for (var index = 1; index < allunicontri.length; index = index + 2) {

        outhtmlb = outhtmlb + '<img class="pimg" src="' + allunicontri[index].imgurl + '" alt="' + allunicontri[index].name + '" title="' + allunicontri[index].name + '" style="border-radius:50%;"/>';
        // console.log(openebscontri);
        //     p++;
        // } else {
        //     outhtmlb = outhtmlb + '</div><div class="carousel-item " style="">'
        //     p = 0;
        // }

    }
    $('#contibutorslist2').html(outhtmlb + '');
}



setTimeout(function() {
    // for (let item of uniqueuser) {
    //     var userurl = 'https://api.github.com/users/' + item + '?client_id=db5e3e3ede4e4174e0d6&client_secret=fdaad534cddc7373daf361a4d9d447ecdfb125ed';
    //     var location1;
    //     $.getJSON(userurl, function(json) {
    //         location1 = json.location

    //         alllocation.push(location1);
    //     });

    // }
    bcrousel();
}, 3000);

// setTimeout(function() {
//     var outhtmlloc = '';
//     for (let item of alllocation) {

//         latilogurl = 'https://maps.googleapis.com/maps/api/geocode/json?address=' + item + '&key=AIzaSyC4O9P43xMKBg7iQV4RTS9HoEnRQjqvDsY'
//         var loc;

//         $.getJSON(latilogurl, function(json) {
//             loc = json;
//             var obj = {
//                 lat: loc.results[0].geometry.location.lat,
//                 lng: loc.results[0].geometry.location.lng
//             }
//             outhtmlloc = outhtmlloc + '{ lat:' + loc.results[0].geometry.location.lat + ', lng:' + loc.results[0].geometry.location.lng + '},';
//             allcordinate.push(obj);
//             console.log(outhtmlloc);
//         });

//         loclength++;

//     }
//     $('#displayloc').html(outhtmlloc);

// }, 6000);


// setTimeout(function() {


//     initMap();

//     console.log(loclength);
//     console.log(all.length);
// }, 10000)


function requestJSON(url, callback) {
    $.ajax({
        url: url,
        complete: function(xhr) {
            callback.call(null, xhr.responseJSON);
        }
    });
}

function initMap() {


    var mzoom;
    if ($(window).width() > 1366) {
        mzoom = 1;
    } else if ($(window).width() > 700) {
        mzoom = 1;
    } else {
        mzoom = 0;
    }
    var map2 = new google.maps.Map(document.getElementById('map2'), {

        zoom: mzoom,
        center: {
            lat: 28.0339,
            lng: 1.6596
        },
        styles: [{
                "featureType": "administrative",
                "elementType": "all",
                "stylers": [{
                    "saturation": "-100"
                }]
            },
            {
                "featureType": "administrative.province",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                        "saturation": -100
                    },
                    {
                        "lightness": 65
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                        "saturation": -100
                    },
                    {
                        "lightness": "50"
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "all",
                "stylers": [{
                    "saturation": "-100"
                }]
            },
            {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [{
                    "visibility": "simplified"
                }]
            },
            {
                "featureType": "road.arterial",
                "elementType": "all",
                "stylers": [{
                    "lightness": "30"
                }]
            },
            {
                "featureType": "road.local",
                "elementType": "all",
                "stylers": [{
                    "lightness": "40"
                }]
            },
            {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{
                        "saturation": -100
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                        "hue": "#ffff00"
                    },
                    {
                        "lightness": -25
                    },
                    {
                        "saturation": -97
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [{
                        "lightness": -25
                    },
                    {
                        "saturation": -100
                    }
                ]
            }
        ]
    });
    console.log(mzoom);
    var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    if (loclength < all.length) {
        var markers2 = all.map(function(location, i) {
            return new google.maps.Marker({
                position: location,
                label: labels[i % labels.length]
            });
        });
    } else {
        var markers2 = allcordinate.map(function(location, i) {
            return new google.maps.Marker({
                position: location,
                label: labels[i % labels.length]
            });
        });

    }

    var markerCluster = new MarkerClusterer(map2, markers2, {
        imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
    });



    // map.set('styles', styles);
}






var all = [{ lat: 12.9715987, lng: 77.5945627 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 37.4418834, lng: -122.1430195 }, { lat: 23.3440997, lng: 85.309562 }, { lat: 49.2827291, lng: -123.1207375 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 20.593684, lng: 78.96288 }, { lat: 28.6139391, lng: 77.2090212 }, { lat: 19.2094006, lng: 73.0939483 }, { lat: -33.8688197, lng: 151.2092955 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 37.09024, lng: -95.712891 }, { lat: 43.653226, lng: -79.3831843 }, { lat: 11.2194391, lng: 78.1677236 }, { lat: 23.181467, lng: 79.9864071 }, { lat: 28.7040592, lng: 77.10249019999999 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 51.165691, lng: 10.451526 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 15.783471, lng: -90.23075899999999 }, { lat: 17.385044, lng: 78.486671 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 19.0759837, lng: 72.8776559 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 51.48158100000001, lng: -3.17909 }, { lat: 55.378051, lng: -3.435973 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 43.4642578, lng: -80.5204096 }, { lat: 32.715738, lng: -117.1610838 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 20.593684, lng: 78.96288 }, { lat: 62.4113634, lng: -149.0729714 }, { lat: 13.0826802, lng: 80.2707184 }, { lat: 37.7749295, lng: -122.4194155 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 20.2960587, lng: 85.8245398 }, { lat: 37.3229978, lng: -122.0321823 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 12.9715987, lng: 77.5945627 }, { lat: 37.4418834, lng: -122.1430195 }, { lat: 40.7127753, lng: -74.0059728 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 32.7766642, lng: -96.79698789999999 }, { lat: 21.4668716, lng: 83.9811665 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 40.46366700000001, lng: -3.74922 }, { lat: 46.227638, lng: 2.213749 }, { lat: 43.4642578, lng: -80.5204096 }, { lat: 28.6139391, lng: 77.2090212 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 41.8781136, lng: -87.6297982 }, { lat: 22.3038945, lng: 70.80215989999999 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 51.3396955, lng: 12.3730747 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 42.3237073, lng: -83.8783543 }, { lat: 20.593684, lng: 78.96288 }, { lat: -37.68779749999999, lng: 176.1651295 }, { lat: 20.593684, lng: 78.96288 }, { lat: 22.572646, lng: 88.36389500000001 }, { lat: 45.5230622, lng: -122.6764815 }, { lat: 37.09024, lng: -95.712891 }, { lat: 46.2043907, lng: 6.1431577 }, { lat: 24.585445, lng: 73.712479 }];


initMap();