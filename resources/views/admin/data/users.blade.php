<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">システム利用者データ</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
          <canvas id="myChart"></canvas>
          {{ $data[0]['name'] }}
    </div>
    <!-- /.box-body -->
</div>



<script>
$(function () {
    var ctx = document.getElementById("myChart").getContext('2d');
    var name = "{{ $data[0]['name'] }}";
    var value = "{{ $data[0]['value'] }}";
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [name],
            datasets: [{
                label: '利用者数',
                data: value,
                backgroundColor: [
                    'rgba(0, 0, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(0,0,255,1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
});
</script>
