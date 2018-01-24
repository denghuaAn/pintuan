$(function() {
	var select_count = 0;
	var len = $(".selects").length;

	$(".delete-btn").click(function() {
		$(".selects").eq($(".delete-btn").index(this)).prop("checked", true);
		$("#delete").click();
	});

	$(".show-btn").click(function() {
		window.location = "index.php?controller=good&action=show_good&id=" + $(".selects").eq(
			$(".show-btn").index(this)
		).attr("id");
	});

	$("#sure_btn").click(function() {
		$("#delete_form").submit();
	});

	$("#all_select").click(function() {
		var flag = $(this).prop("checked");
		if(flag) {
			select_count = len;
			$(".selects").prop("checked", true);
		} else {
			select_count = 0;
			$(".selects").prop("checked", false);
		}
	});

	$(".selects").change(function() {
		$(this).prop("checked") ? ++select_count : --select_count;
		if(select_count == len) {
			$("#all_select").prop("checked", true);
		} else {
			$("#all_select").prop("checked", false);
		}
	});

	$(".change-btn").click(function() {
		var id = $(".selects").eq($(".change-btn").index(this)).attr("id");
		$.get("index.php?controller=good&action=get_show_goods", {
			id
		}, function(data) {
			data = JSON.parse(data);
			$("#change_good_type").val(data["good_type"]);
			$("#change_good_name").val(data["good_name"]);
			$("#change_good_desc").val(data["good_desc"]);
			$("#change_good_price").val(data["good_price"]);
			if(data["good_photos"]) {
				var len = data["good_photos"].length;
				var html = "";
				for(var i = 0; i < len; ++i) {
					html += "<img class='img' src='" + data["good_photos"][i] + "'/>"
				}
				$(".imgs").html(html);
			}

			$("#good_id").val(id);
		});
	});

	$("#change_good_photos").change(function() {
		var len = this.files.length;
		var fr = [];
		var html = "";
		for(var i = 0; i < len; ++i) {
			fr[i] = new FileReader();
			fr[i].readAsDataURL(this.files[i]);
			fr[i].onload = function() {
				html += "<img class='img' src='" + this.result + "'/>";
				$(".imgs").html(html);
			};

		}

	});

	$("#sure-change").click(function() {
		var form_data = new FormData();
		var good_id = $("#good_id").val();
		form_data.append("good_id", good_id);
		form_data.append("good_type", $("#change_good_type").val())
		form_data.append("good_name", $("#change_good_name").val())
		form_data.append("good_desc", $("#change_good_desc").val())
		form_data.append("good_price", $("#change_good_price").val())
		var len = $("#change_good_photos").get(0).files.length;
		for(var i = 0; i < len; ++i) {
			form_data.append("good_photos[]", $("#change_good_photos").get(0).files[i]);
		}

		$.ajax({
			type: "post",
			url: "index.php?controller=good&action=update",
			contentType: false,
			processData: false,
			data: form_data,
			success: function(data) {
				data = JSON.parse(data);
				if(data['status'] == 'error') {
					alert('返回数据出错!');
					return;
				}
				data = data['data'];
				$(".good_type").eq(good_id).html(data["good_type"]);
				$(".good_name").eq(good_id).html(data["good_name"]);
				$(".good_desc").eq(good_id).html(data["good_desc"]);
				$(".good_price").eq(good_id).html(data["good_price"]);
				var html = "";
				var len = data["good_photos"].length;

				for(var i = 0; i < len; ++i) {
					html += "<img src='" + data["good_photos"][i] + "'/>"
				}
				$(".good_photos").eq(good_id).html(html);
			},

		});
	});

});