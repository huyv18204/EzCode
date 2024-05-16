@extends('layouts.admin')
@section('title')
	Bảng điều khiển
@endsection
@section('content')
	<main>
		<div class="head-title">
			<div class="left">
				<h1>Bảng điều khiển</h1>
{{--				<ul class="breadcrumb">--}}
{{--					<li>--}}
{{--						<a href="">Bảng điều khiển</a>--}}
{{--					</li>--}}
{{--					<li><i class='bx bx-chevron-right'></i></li>--}}
{{--					<li>--}}
{{--						<a class="active" href="#">Bảng điều khiển</a>--}}
{{--					</li>--}}
{{--				</ul>--}}
			</div>
		</div>

		<ul class="box-info">
			<li>
				<i class='bx bxs-calendar-check'></i>
				<span class="text">
						<h3>{{$countOrder["count"]}}</h3>
						<p>Đơn hàng</p>
					</span>
			</li>
			<li>
				<i class='bx bxs-group'></i>
				<span class="text">
						<h3>{{$countUser["count"]}}</h3>
						<p>Khách hàng</p>
					</span>
			</li>
			<li>
				<i class='bx bxs-dollar-circle'></i>
				<span class="text">
						<h3>${{$sumSales['sum']}}</h3>
						<p>Doanh số</p>
					</span>
			</li>
		</ul>


		<div class="table-data">
			<div class="order">
				<div class="head">
					<h3>Đặt hàng gần đây</h3>
					<i class='bx bx-search'></i>
					<i class='bx bx-filter'></i>
				</div>
				<table>
					<thead>
					<tr>
						<th>Khách hàng</th>
						<th>Ngày đặt</th>
						<th>Trạng thái</th>
					</tr>
					</thead>
					<tbody>
					@foreach($orders as $order)
						<tr>
							<td>
								<img src="{{route("/assets/imgs/user.png")}}">
								<p>{{$order['name']}}</p>
							</td>
							<td>{{$order['order_date']}}</td>
							<td><span class="status completed">Hoàn thành</span></td>
						</tr>
					@endforeach

					</tbody>
				</table>
			</div>
			<div class="todo">
				<div class="head">
					<h3>Đơn hàng theo khoá học</h3>
					<i class='bx bx-plus'></i>
					<i class='bx bx-filter'></i>
				</div>
				<div>
					<canvas id="myChart"></canvas>
				</div>
			</div>
		</div>
	</main>
    @php
        // Gán dữ liệu PHP vào biến JavaScript
        $js_array = json_encode($statistical);
    @endphp
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>

        const myArray = {!! $js_array !!};
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: myArray.map((item)=> item.name),
                datasets: [{
                    label: 'Số lượng',
                    data: myArray.map((item)=> item.count),
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

@endsection