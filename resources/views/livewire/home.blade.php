
<script>
    console.log('hii');
</script>
<div>
   <div class="card-body">
    <livewire:livewire-column-chart
    :column-chart-model="$columnChartModel"
/>
   </div>
</div>
@section('js')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>  
@endsection
