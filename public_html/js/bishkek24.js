var data = {
    labels: ["00:00", "01:00", "02:00", "03:00", "04:00", "05:00", "06:00","07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00","14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00","21:00", "22:00", "23:00", "24:00"],
    datasets: [
        {
            label: "Скорость ветра на этот час [м/c]",
            backgroundColor: "rgba(179,181,198,0.2)",
            borderWidth: 10,
            data: [2, 3, 4, 2, 3, 2, 2],
        }


    ]
};
var ctx = document.getElementById("myChart").getContext("2d");
var myLineChart = Chart.Line(ctx, {
    data: data,
});

