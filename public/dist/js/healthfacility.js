$(document).ready(function() {
    window.setTimeout(function() {
        $(".alert")
            .fadeTo(1000, 0)
            .slideUp(1000, function() {
                $(this).remove();
            });
    }, 2000);

    $(".dynamic").change(function() {
        var select = $(this).attr("id");
        var value = $(".dynamic option:selected").attr("id");

        var dependent = "state_id";
        url = '/healthfacilities/fetch';

        if (value != "") {
            $.ajax({
                url: url,
                method: "POST",
                data: {
                    select: select,
                    value: value,
                    dependent: dependent
                },
                success: function(result) {
                    $("#lga").html(result);
                },
                error: function(err) {
                    console.log(err);
                },
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
                }
            });
        }
    });

    $(".dynamic2").change(function() {
        var select = $(this).attr("id");
        var value = $(".dynamic2 option:selected").attr("id");
        url = '/healthfacilities/cbo/fetch';

        if (value != "") {
            $.ajax({
                url: url,
                method: "POST",
                data: {
                    select: select,
                    value: value,
                },
                success: function(result) {

                    console.log(result);
                    var cbo = result.cbo;
                    var ward = result.ward;

                    if (cbo == "") {
                        $("#cbo1").html(
                            '<option value="">No Data Found</option>'
                        );
                    }else{
                        $("#cbo1").html(cbo);
                    }
                    if(ward == ""){
                        $("#ward").html(
                            '<option value="">No Data Found</option>'
                        );
                    }
                    else{
                        $("#ward").html(ward);
                    }
                },
                error: function(err) {
                    console.log(err);
                },
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
                }
            });
        }
    });

    $(".dynamic3").change(function() {
        var value = $(".dynamic3 option:selected").attr("id");

        var dependent1 = "lga";

        if (value != "") {
            $.ajax({
                url: "/cat/fetch",
                method: "POST",
                data: {
                    value: value
                },
                success: function(result) {
                    if (result == "") {
                        $("#cbo1").html(
                            '<option value="">No Data Found</option>'
                        );
                    } else {
                        $("#cbo1").html(result);
                    }
                },
                error: function(err) {
                    console.log(err);
                },
                headers: {
                    "X-CSRF-Token": $('meta[name="csrf-token"]').attr("content")
                }
            });
        }
    });
});