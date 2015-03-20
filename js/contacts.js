var map;
    DG.then(function () {
        map = DG.map('map', {
            "center": [54.3494538996953,48.5324266352685],
            "zoom": 14
        });
        DG.marker([54.3494538996953,48.5324266352685]).addTo(map).bindPopup('Вы кликнули по мне!');
    });
