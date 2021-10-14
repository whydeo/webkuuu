@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
{{-- @livewire('home') --}}
<body>
  
    <div class="col-xl-6" style="margin-top: 30px;">
		<div class="card">
			<div class="card-body">
				<div class="chart-container">
					<div class="chart has-fixed-height" id="pie_basic"></div>
				</div>
			</div>
		</div>
	</div>	
</div>
    </body>
@stop

@section('css')
   
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"> --}}
   
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.bundle.min.js')}}"></script>	
	<script type="text/javascript" src="{{asset('js/echarts.min.js')}}"></script>	
    <script type="text/javascript">
        var pie_basic_element = document.getElementById('pie_basic');
        if (pie_basic_element) {
            var pie_basic = echarts.init(pie_basic_element);
            pie_basic.setOption({
                color: [
                    '#2ec7c9','#b6a2de','#5ab1ef','#ffb980','#d87a80',
                    '#8d98b3','#e5cf0d','#97b552','#95706d','#dc69aa',
                    '#07a2a4','#9a7fd1','#588dd5','#f5994e','#c05050',
                    '#59678c','#c9ab00','#7eb00a','#6f5553','#c14089'
                ],          
                
                textStyle: {
                    fontFamily: 'Roboto, Arial, Verdana, sans-serif',
                    fontSize: 13
                },
        
                title: {
                    text: 'Pie Chart Example',
                    left: 'center',
                    textStyle: {
                        fontSize: 17,
                        fontWeight: 500
                    },
                    subtextStyle: {
                        fontSize: 12
                    }
                },
        
                tooltip: {
                    trigger: 'item',
                    backgroundColor: 'rgba(0,0,0,0.75)',
                    padding: [10, 15],
                    textStyle: {
                        fontSize: 13,
                        fontFamily: 'Roboto, sans-serif'
                    },
                    formatter: "{a} <br/>{b}: {c} ({d}%)"
                },
        
                legend: {
                    orient: 'horizontal',
                    bottom: '0%',
                    left: 'center',                   
                    data: ['keterangan', 'keterangan','keterangan','keterangan'],
                    itemHeight: 8,
                    itemWidth: 8
                },
        
                series: [{
                    name: 'Product Type',
                    type: 'pie',
                    radius: '70%',
                    center: ['50%', '50%'],
                    itemStyle: {
                        normal: {
                            borderWidth: 1,
                            borderColor: '#fff'
                        }
                    },
                    data: [
                        {value: {{$nilai_count}}, name: 'keterangan'},
                        {value: {{$ni_count}}, name: 'keterangan'},
                        {value: {{$na_count}}, name: 'keterangan'}
                        {value: {{$nu_count}}, name: 'keterangan'}
                    ]
                }]
            });
        }
        </script>
{{--       
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
    var nilai =  <?php echo json_encode($nilai) ?>;
   
    Highcharts.chart('container', {
        title: {
            text: 'nilai siswa, semester ini'
        },
        subtitle: {
            text: ''
        },
         xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        },
        yAxis: {
            title: {
                text: 'nilai siswa'
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'nilai siswa',
            data: nilai
        }],
        
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 200
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
});
</script> --}}
@stop