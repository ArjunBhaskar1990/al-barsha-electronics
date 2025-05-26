$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
})


function deleteService(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/our-services/" + val,
            type: "DELETE",
            beforeSend: function () {

            },
            success: function (response) {

                if (response.message) {
                    $('.success-msg').show();
                    $('#messagedel').html(response.message);
                }
                if (response.success === true) {
                    window.location.href = response.url;
                }
            },
            error: function (error) {

            }
        })

    }
}

function deleteTestimonial(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/testimonials/" + val,
            type: "DELETE",
            beforeSend: function () {

            },
            success: function (response) {

                if (response.message) {
                    $('.success-msg').show();
                    $('#messagedel').html(response.message);
                }
                if (response.success === true) {
                    window.location.href = response.url;
                }
            },
            error: function (error) {

            }
        })

    }
}
