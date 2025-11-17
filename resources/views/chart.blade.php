@extends('layout')

@section('title', 'Diagram')

@section('content')
<article>
    <header class="major">
        <h2>Statisztikák</h2>
        <p>Szállodánkénti árajánlatok száma</p>
    </header>

    <canvas id="myChart" width="400" height="200"></canvas>
</article>

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($labels),
            datasets: [{
                label: 'Árajánlatok száma',
                data: @json($data),
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0
                    }
                }
            }
        }
    });
</script>
@endsection