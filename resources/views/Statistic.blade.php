<!DOCTYPE html>
<html lang="zh-Hant">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>發一崇德台南道場</title>

	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/select/1.3.3/css/select.bootstrap.min.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
	<script src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<!-- SEO -->
	<meta name=" keywords" content="發一崇德台南道場,發一崇德,台南道場,台南,仁義區" />
	<meta name="description"
		content="發一崇德台南道場，響應您我善願同步誦經祈願，恭誦彌勒救苦真經，心經誦經後點擊「我已經完成誦經」迴向，把愛串起來 凝聚您我慈悲之心，叩求諸天仙佛慈悲挽化疫情止息 願天下眾生平安" />

	<!-- Open Graph -->
	<meta property="og:title" content="發一崇德台南道場仁義區,發一崇德,台南道場,台南" />
	<meta property="og:description"
		content="發一崇德台南道場，響應您我善願同步誦經祈願，恭誦彌勒救苦真經，心經，明聖經誦經後點擊「我已經完成誦經」迴向，把愛串起來 凝聚您我慈悲之心，叩求諸天仙佛慈悲挽化疫情止息 願天下眾生平安" />
</head>

<body>
	<div class="container py-3">
		<header>
			<div class="pricing-header p-2 pb-md-4 mx-auto text-center">
				<h1 class="display-6 fw-normal">發一崇德台南仁義區
					<span class="badge rounded-pill bg-light text-dark my-1">愛的共振
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dc3545"
							class="bi bi-heart-fill mb-2" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
						</svg></span>
				</h1>
				<h2>善願同步迴向祈願</h2>
				<p class="fs-10 text-muted">
					相信愿力抵業力
					<br>事事感恩遇考懺悔
					<br>望人人都能脫劫關
				</p>
			</div>
		</header>

	</div>

	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script>
	<script type="text/javascript">
		fetch('http://worldclockapi.com/api/json/utc/now')
      .then(data => data.json())
      .then(d => 
      document.getElementById('foot').innerHTML = (new Date(d.currentDateTime)).toISOString() .split('T')[0]
		)
		$(document).ready(function () {
			$('#example').DataTable( {
				select: true
			} );
			//彈出遮罩表單
		});

		window.onload = init;
		
	</script>
	<div class = "container">
	<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>組別</th>
                <th>壇名</th>
                <th>姓名</th>
                <th>彌勒真經</th>
                <th>心經</th>
                <th>明聖經</th>
                <th>一日一齋</th>
            </tr>
        </thead>
        <tbody>
		@foreach($statistic as $data)
            <tr>
                <td>{{$data->grp}}</td>
                <td>{{$data->tan}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->b1}}</td>
                <td>{{$data->b2}}</td>
                <td>{{$data->b3}}</td>
                <td>{{$data->veg}}</td>
            </tr>
		@endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>組別</th>
                <th>壇名</th>
                <th>姓名</th>
                <th>彌勒真經</th>
                <th>心經</th>
                <th>明聖經</th>
                <th>一日一齋</th>
            </tr>
        </tfoot>
    </table>
	</div>
</body>
<footer  align="center">
<a id="foot"></a> 仁義區
  </footer>
</html>
