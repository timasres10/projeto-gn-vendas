jQuery("#Slider1").slider({ from: 1, to: 10, step: 1, dimension: '&nbsp;' });
jQuery("#Slider2").slider({ from: 1, to: 30,  step: 1, dimension: '&nbsp;' });
jQuery("#Slider3").slider({ from: 0, to: 500, heterogeneity: ['50/100', '75/250'], scale: [0, '|', 50, '|', '100', '|', 250, '|', 500], limits: false, step: 1, dimension: '&nbsp;m<small>2</small>', skin: "round_plastic" });
jQuery("#Slider4").slider({ from: 1, to: 30, heterogeneity: ['50/5', '75/15'], scale: [1, '|', 3, '|', '5', '|', 15, '|', 30], limits: false, step: 1, dimension: '', skin: "blue", callback: function (value) { console.dir(this); } });

jQuery("#Slider5").slider({
    from: 480, to: 1020, step: 15, dimension: '', scale: ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'], limits: false, calculate: function (value) {
        var hours = Math.floor(value / 60);
        var mins = (value - hours * 60);
        return (hours < 10 ? "0" + hours : hours) + ":" + (mins == 0 ? "00" : mins);
    }
})
