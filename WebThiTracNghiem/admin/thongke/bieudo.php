<body>
    <div class="container">
        <h2>Thống kê kết quả </h2>

        <div class="bieudo">
            <div>
                <canvas id="myChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
                const ctx = document.getElementById('myChart');

                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['thanh', 'Hoàng', 'Sơn', 'Trang ', 'Vân ', 'Ly'],
                        datasets: [{
                            label: '# điểm thi',
                            data: [10,8,5,9,6,7],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>

        </div>
        <div class="row mb10">
            <a href="?act=dskq"><button type="button" class="btn btn-danger">Xem Chi Tiết</button></a>
        </div>
    </div>

</body>

</html>