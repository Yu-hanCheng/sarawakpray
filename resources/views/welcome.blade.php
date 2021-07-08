<!DOCTYPE html>
<html lang="zh-Hant">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>發一崇德砂拉越道務中心</title>

	<!-- bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
	<!-- <link href="{{ URL::to('/') }}/css/app.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://malsup.github.io/jquery.blockUI.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript" src="{{ asset('storage/jquery.blockUI.js') }}"></script> -->
	<!-- <script type="text/javascript" src="{{ asset('storage/jquery-ui.js') }}"></script>
	<script type="text/javascript" src="{{ asset('storage/jquery-1.8.2.js') }}"></script> -->
	<!-- <link href="{{ asset('jquery-ui.css') }}" rel="stylesheet"> -->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	
	<!-- SEO -->
	<meta name=" keywords" content="發一崇德砂拉越道務中心,發一崇德,砂拉越道務中心,砂拉越" />
	<meta name="description"
		content="發一崇德砂拉越道務中心，響應您我善願同步誦經祈願，恭誦彌勒救苦真經，心經誦經後點擊「我已經完成誦經」迴向，把愛串起來 凝聚您我慈悲之心，叩求諸天仙佛慈悲挽化疫情止息 願天下眾生平安" />

	<!-- Open Graph -->
	<meta property="og:title" content="發一崇德砂拉越道務中心,發一崇德,砂拉越道務中心,砂拉越" />
	<meta property="og:description"
		content="發一崇德砂拉越道務中心，響應您我善願同步誦經祈願，恭誦彌勒救苦真經，心經，明聖經誦經後點擊「我已經完成誦經」迴向，把愛串起來 凝聚您我慈悲之心，叩求諸天仙佛慈悲挽化疫情止息 願天下眾生平安" />
</head>

<body>
	<div class="container py-3">
		<header>
			<div class="pricing-header p-2 pb-md-4 mx-auto text-center">
				<h1 class="display-6 fw-normal">發一崇德砂拉越道務中心
					<span class="badge rounded-pill bg-light text-dark my-1">愛的共振
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#dc3545"
							class="bi bi-heart-fill mb-2" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
						</svg></span>
				</h1>
				<h2>善願同步迴向祈願</h2>
				<p class="fs-6 text-muted">
				把愛串起來 凝聚您我慈悲之心<br>
以愿力守護人間<br>
叩求諸天仙佛慈悲<br>
挽化疫情止息 上天早降甘霖<br>
天佑台灣 世界平安<br>
				</p>
				<h4>點擊「我已經完成誦經」迴向</h4>
				<p class="fs-6 text-muted">
					相信愿力抵業力
					<br>事事感恩遇考懺悔
					<br>望人人都能脫劫關
				</p>
			</div>
		</header>

		<main>
		<div align="center"><input name="addSubmit" type="button" class="btn btn-primary btn-lg" id="addSubmit" onclick="javascript:add()" value="我已經完成誦經"></div>
		<br><div align="center" class="fs-6 text-muted">第二階段:即曰起~7/12止。7/24早上9:00功德迴向為大家祈健康平安、疫情消災。</div>
		<div class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable" tabindex="-1"
			role="dialog" aria-labelledby="ui-dialog-title-formadd"
			style="display: none; z-index: 1000; outline: 0px; position: fixed;">
			<div class="ui-dialog-titlebar ui-widget-header ui-corner-all ui-helper-clearfix"><span
					class="ui-dialog-title" id="ui-dialog-title-formadd">&nbsp;</span><a href="#"
					class="ui-dialog-titlebar-close ui-corner-all" role="button"><span
						class="ui-icon ui-icon-closethick">close</span></a></div>
			<form action="/" method="post" name="formadd" id="formadd" role="form"
				class="ui-dialog-content ui-widget-content">
				@csrf
				<table class="table table-striped table-bordered table-hover">
					<tbody>
						<tr>
							<td>姓名</td>
							<td>
								<input type="text" name="name" id="name" style="font-size: 12pt; font-family: 新細明體"
									size="10" value=""></td>
						</tr>
						<tr>
							<td>單位</td>
							<td>
								<select name="tan" id="tan">
									<option value="D佛院">佛院</option>      
									@foreach($tans as $atan)
									<option value="{{$atan->id}}">{{$atan->area}}-{{$atan->group}}-{{$atan->tan}}</option>
									@endforeach
									
								</select>
							</td>
						</tr>



						<tr>
							<td colspan="2">誦經記錄明細</td>
						</tr>
						<tr>
						</tr>
						<tr>
							<td>項目</td>
							<td>次數</td>
						</tr>
						<tr>
						</tr>
						<tr>
							<td>彌勒救苦真經</td>
							<td><input type="text" name="b1" id="book1" style="font-size: 12pt; font-family: 新細明體"
									maxlenght="3" size="3" value=""></td>
						</tr>
						<tr>
							<td>心經</td>
							<td><input type="text" name="b2" id="book2" style="font-size: 12pt; font-family: 新細明體"
									maxlenght="3" size="3" value=""></td>
						</tr>
						<tr>
							<td>號召令</td>
							<td><input type="text" name="b3" id="book3" style="font-size: 12pt; font-family: 新細明體"
									maxlenght="3" size="3" value=""></td>
						</tr>
						<tr>
							<td>一日一齋</td>
							<td><input type="text" name="veg" id="veg" style="font-size: 12pt; font-family: 新細明體"
									maxlenght="3" size="3" value=""></td>
						</tr>
					</tbody>
				</table>
			</form>
			<div class="ui-resizable-handle ui-resizable-n" style="z-index: 1000;"></div>
			<div class="ui-resizable-handle ui-resizable-e" style="z-index: 1000;"></div>
			<div class="ui-resizable-handle ui-resizable-s" style="z-index: 1000;"></div>
			<div class="ui-resizable-handle ui-resizable-w" style="z-index: 1000;"></div>
			<div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ui-icon-grip-diagonal-se"
				style="z-index: 1000;"></div>
			<div class="ui-resizable-handle ui-resizable-sw" style="z-index: 1000;"></div>
			<div class="ui-resizable-handle ui-resizable-ne" style="z-index: 1000;"></div>
			<div class="ui-resizable-handle ui-resizable-nw" style="z-index: 1000;"></div>
			<div class="ui-dialog-buttonpane ui-widget-content ui-helper-clearfix">
				<div class="ui-dialog-buttonset"><button type="button">存檔</button><button type="button">取消</button>
				</div>
			</div>
		</div>
		<br>
			<form action="/" method="post">
				@csrf
				<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
					<div class="col">
						<div class="card mb-3 rounded-3 shadow-sm">
							<div class="card-header py-3">
								<h4 class="my-0 fw-normal">彌勒救苦真經</h4>
							</div>
							<div class="card-body">
								<h1 class="card-title pricing-card-title">
									<small class="text-muted fw-light">誦經累計</small> {{ $book1 }}
									<small class="text-muted fw-light">次</small>
								</h1>
								<a href="{{url('mi')}}" value="彌勒救苦真經本文" target="_blank" class="w-100 btn btn-danger">彌勒救苦真經本文</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card mb-3 rounded-3 shadow-sm">
							<div class="card-header py-3">
								<h4 class="my-0 fw-normal">心經</h4>
							</div>
							<div class="card-body">
								<h1 class="card-title pricing-card-title">
									<small class="text-muted fw-light">誦經累計</small> {{ $book2 }}
									<small class="text-muted fw-light">次</small>
								</h1>
								<a name="book2" href="{{url('mind')}}" value="心經本文" target="_blank" class="w-100 btn btn-info">
									心經本文
								</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card mb-3 rounded-3 shadow-sm">
							<div class="card-header py-3">
								<h4 class="my-0 fw-normal">桃園明聖經</h4>
							</div>
							<div class="card-body">
								<h1 class="card-title pricing-card-title">
									<small class="text-muted fw-light">累計</small> {{ $book3 }}
									<small class="text-muted fw-light">次</small>
								</h1>
								<a name="book3" class="w-100 btn btn-warning" href="{{url('min')}}" value="明聖經本文" target="_blank" >
									桃園明聖經本文
								</a>
							</div>
						</div>
					</div>
					
				</div>
			</form>
			<div class="col mb-3 rounded-3 shadow-sm" align="center">
						<div class="card mb-3 rounded-3 shadow-sm">
							<div class="card-header py-3">
								<h4 class="my-0 fw-normal">1 日 1 齋疫情消災</h4>
							</div>
							<div class="card-body">
								<h1 class="card-title pricing-card-title">
									<small class="text-muted fw-light">吃齋累計</small> {{ $veg }}
									<small class="text-muted fw-light">次</small>
								</h1>
								<button name="veg" type="submit" class="w-100 btn btn-success" disabled>
									響應吃素1餐/次
								</button>
							</div>
						</div>
					</div>
		</main>
		
	</div>

	<!-- bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			//彈出遮罩表單
			
			(jQuery)("#formadd").dialog({
				bgiframe: true,
				autoOpen: false,
				modal: true,
				width: "auto",
				buttons: {
					"存檔": function () {
						//取得表單輸入資料
						var name = (jQuery)("#name").val();
						var tan = (jQuery)("#tan").val();
						var book1 = (jQuery)("#book1").val();
						var book2 = (jQuery)("#book2").val();
						var book3 = (jQuery)("#book3").val();
						var veg = (jQuery)("#veg").val();
						if (book1 == "") {
							book1 = "0";
						}
						if (book2 == "") {
							book2 = "0";
						}
						if (book3 == "") {
							book3 = "0";
						}
						if (veg == "") {
							veg = "0";
						}
						var data = "name=" + name + "&tan=" + tan + "&b1=" + book1 + "&b2=" +
							book2 + "&b3=" + book3 + "&veg=" + veg;
						//驗證輸入空白
						if (document.formadd.name.value == "") {
							alert("請輸姓名！");
							document.formadd.name.focus();
							return false;
						}
						//if(document.form.Color.value==""){
						//	alert("請輸入Color！");
						//	document.form.Color.focus();
						//	return false;
						//}	
						if (document.formadd.book1.value == "" && document.formadd.book2.value == "" &&
							document.formadd.book3.value == "" && document.formadd.veg.value == "") {
							alert("至少誦一部經才可存檔！");
							document.form.book1.focus();
							return false;
						}
						//出現遮罩系統訊息
						// (jQuery).blockUI({
						// 	theme: true,
						// 	title: "系統訊息",
						// 	message: '<p><img src="/yulin/assets/ajax-loader_small.gif" />系統處理中...請稍候...</p>',
						// 	timeout: 120000
						// });
						//進行資料庫操作
						(jQuery).ajax({
							type: "POST",
							url: "/",
							data: data,
							cache: false,
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							success: function (data) {
							
							// // 		// (jQuery).unblockUI();
									(jQuery)("#formadd").dialog('close');
									window.location.href =	'/';
							// 	}
							}
						});
					},
					"取消": function () {
						(jQuery)(this).dialog("close");
					}
				}
			});
			// $(document).on("click", "#editSubmit", function () {
			// 	//var edit_id = $("#editId").val();  
			// 	//var name = $("#editName").val();  
			// 	//var email = $("#editEmail").val();  
			// 	//var password = $("#editPassword").val();  
			// 	$.ajax({
			// 		url: "/updatecount",
			// 		type: "POST",
			// 		cache: false,
			// 		//data:{edit_id:edit_id,name:name,email:email,password:password},  
			// 		success: function (data) {
			// 			if (data == 1) {
			// 				$.ajax({
			// 					url: "/getcount",
			// 					type: "POST",
			// 					cache: false,
			// 					success: function (data) {
			// 						$("#countnow").html(data);
			// 					}
			// 				});
			// 				//loadTableData();  
			// 			} else {
			// 				alert("Some thing went wrong");
			// 			}
			// 		}
			// 	});
			// });



		});

		function add() {
			//出現遮罩系統訊息
			// $.blockUI({
			// 	theme: true,
			// 	title: "系統訊息",
			// 	message: '<p><img src="image/ajax-loader_small.gif" />系統處理中...請稍候...</p>',
			// 	timeout: 120000
			// });
			//清空輸入欄位
			(jQuery)("#name").val("");
			(jQuery)("#book1").val("");
			(jQuery)("#book2").val("");
			(jQuery)("#book3").val("");
			(jQuery)("#veg").val("");
			// (jQuery).unblockUI();
			(jQuery)("input").attr("disabled", false);
			(jQuery)("select").attr("disabled", false);
			(jQuery)("#formadd").dialog('open');
			(jQuery)("#formadd").dialog("option", "title", "新增明細");
		}

		function MM_goToURL() { //v3.0
			var i, args = MM_goToURL.arguments;
			document.MM_returnValue = false;
			for (i = 0; i < (args.length - 1); i += 2) eval(args[i] + ".location='" + args[i + 1] + "'");
		}

		function init() {
			$.ajax({
				url: "/",
				type: "GET",
				cache: false,
				
			});
		}
		window.onload = init;
	</script>
</body>

</html>
