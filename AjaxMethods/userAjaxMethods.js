var path = $("#host").val();

//TODO::insert a record in database table
$("#create_user_form").submit(function (e) {
	e.preventDefault();
	if ($("#create_user_form").parsley().isValid()) {
		var csrf_test_name = $.cookie('csrf_cookie_name');
		var u_MEMBER_ID = $("#u_MEMBER_ID").val();
		var u_MEMBER_TYPE = $("#u_MEMBER_TYPE").val();
		//alert(u_MEMBER_ID, u_MEMBER_TYPE);
		var u_TITLE = $("#u_TITLE").val();
		var u_NAME = $("#u_NAME").val();
		var u_CITY = $("#u_CITY").val();
		var u_PIN = $("#u_PIN").val();
		var u_ADDRESS_1 = $("#u_ADDRESS_1").val();
		var u_ADDRESS_2 = $("#u_ADDRESS_2").val();
		var u_ADDRESS_3 = $("#u_ADDRESS_3").val();
		var u_ADDRESS_4 = $("#u_ADDRESS_4").val();
		var u_MOBILE = $("#u_MOBILE").val();
		var u_MAGRETURN = $("#u_MAGRETURN").val();
		var u_STOPMAIL = $("#u_STOPMAIL").val();
		var u_DESTFILE = $("#u_DESTFILE").val();
		var u_EXPIRED = $("#u_EXPIRED").val();
		var u_EMAIL = $("#u_EMAIL").val();
		var u_MONTH = $("#u_MONTH").val();
		var u_YEAR = $("#u_YEAR").val();
		var u_HANDELV = $("#u_HANDELV").val();
		$.ajax({
			type: "POST",
			dataType: "JSON",
			url: path + 'insertUser',
			headers: {
				"Authorization": $.cookie("jwt")
			},
			data: {
				csrf_test_name,
				u_MEMBER_ID,
				u_MEMBER_TYPE,
				u_TITLE,
				u_NAME,
				u_ADDRESS_1,
				u_ADDRESS_2,
				u_ADDRESS_3,
				u_ADDRESS_4,
				u_CITY,
				u_PIN,
				u_MOBILE,
				u_EMAIL,
				u_MONTH,
				u_YEAR,
				u_MAGRETURN,
				u_STOPMAIL,
				u_DESTFILE,
				u_EXPIRED,
				u_HANDELV
			},
			success: function (json) {
				console.log(json);
				if (json.status == 200) {

					$.toast({
						text: 'data is inserted successfully',
						icon: 'success',
						position: "top-right",
					});
					document.getElementById("create_user_form").reset();
					//displayUserList("#user-list");
					//alert(json.msg);
				}
				else {
					alert(json.msg);
				}
			}
		})
	}
});

//TODO::delete the KSA member
$(document).on('click', '.delete-btn', function () {
	var id = $(this).data('delete_id');

	$.confirm({
		title: 'delete action',
		content: 'Are you sure? Delete',
		type: 'red',
		buttons: {
			ok: {
				text: "ok!",
				btnClass: 'btn-primary',
				keys: ['enter'],
				action: function () {

					$.ajax({
						type: "GET",
						dataType: "JSON",
						url: path + "deteleKSAM",
						headers: {
							"Authorization": $.cookie("jwt")
						},
						data: {
							id
						},
						success: function (json) {
							if (json.status == 200) {
								$.toast({
									text: json.msg,
									icon: 'success',
									position: "top-right",
								});
								load_KSA_list(1);
							}
						}
					})
				}
			},
			cancel: function () {
				console.log('the user clicked cancel');
			}
		}
	});
});

$(document).on('click', '.view-btn', function () {
	var id = $(this).data('view_id');

	$.ajax({
		type: "GET",
		dataType: "JSON",
		url: path + "DisplayKSAM",
		headers: {
			"Authorization": $.cookie("jwt")
		},
		data: {
			id
		},
		success: function (json) {
			console.log(json.data);
			if (json.status == 200) {

				$.each(json.data, function (key, val) {
					$("#updated_title").html(val.TITLE);
					$("#updated_name").html(val.NAME);
					$("#updated_emial").html(val.EMAIL);
					$("#updated_mobile").html(val.MOBILE);
					$("#updated_city").html(val.CITY);
					$("#updated_pin").html(val.PIN);
					$("#updated_address_1").html(val.ADDRESS_1);
					$("#updated_address_2").html(val.ADDRESS_2);
					$("#updated_address_3").html(val.ADDRESS_3);
					$("#updated_address_4").html(val.ADDRESS_4);
					$("#updated_month").html(val.MONTH);
					$("#updated_year").html(val.YEAR);
					$("#updated_mag_return").html(val.MAGRETURN);
					$("#updated_stop_mail").html(val.STOPMAIL);
					$("#updated_expired").html(val.EXPIRED);
					$("#updated_hand_develop").html(val.HANDDELV);
				})
			}
			else {
				$.toast({
					text: json.msg,
					position: "top-right"
				})
			}
		}
	})
});

/* $("p").toggle(
	function () { $("p").addClass("asc"); },
	function () { $("p").removeClass("asc").addClass("desc"); },
	function () {
		$("p").removeClass("desc").addClass("");
	});
	  function dataClass(){
  var data=$("p").attr("class");
  alert(data);
  }
  $("p").click(function(){
		var VarData=$(this).data("title");
		var VarData1=$(this).attr("class");
		alert(VarData);
	})
	*/