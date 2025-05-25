$.ajaxSetup({
    headers: {
        "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
    }
})

$(document).ready(function () {


    $('#addtransfaq').validate({
        rules: {
            faqinput: {
                required: true,
            },
            faqanswer: {
                required: true,

            }
        },
        messages: {
            faqinput: {
                required: "Question Field Required !!",

            },
            faqanswer: {
                required: "Answer Field is Empty !!",

            }

        },

        submitHandler: function (form) {

            const formData = $(form).serializeArray();


            $.ajax({

                url: "/admin/translations/addfaq",
                type: "POST",
                data: formData,
                beforeSend: function () {

                },
                success: function (response) {
                    if (response.success === true) {
                        $('#success-msg').show();

                        $('#successmsg').html(response.message);
                        window.location.href = response.url;
                    }

                },
                error: function (error) {

                }
            })

        }
    })

    $('#addbusinessfaq').validate({
        rules: {
            faqinput: {
                required: true,
            },
            faqanswer: {
                required: true,

            }
        },
        messages: {
            faqinput: {
                required: "Question Field Required !!",

            },
            faqanswer: {
                required: "Answer Field is Empty !!",

            }

        },

        submitHandler: function (form) {

            const formData = $(form).serializeArray();


            $.ajax({

                url: "/admin/business/addfaq",
                type: "POST",
                data: formData,
                beforeSend: function () {

                },
                success: function (response) {
                    if (response.success === true) {
                        $('#success-msg').show();

                        $('#successmsg').html(response.message);
                        window.location.href = response.url;
                    }

                },
                error: function (error) {

                }
            })

        }
    })
    $('#addvisafaq').validate({
        rules: {
            faqinput: {
                required: true,
            },
            faqanswer: {
                required: true,

            }
        },
        messages: {
            faqinput: {
                required: "Question Field Required !!",

            },
            faqanswer: {
                required: "Answer Field is Empty !!",

            }

        },

        submitHandler: function (form) {

            const formData = $(form).serializeArray();


            $.ajax({

                url: "/admin/visaservice/addfaq",
                type: "POST",
                data: formData,
                beforeSend: function () {

                },
                success: function (response) {
                    if (response.success === true) {
                        $('#success-msg').show();

                        $('#successmsg').html(response.message);
                        window.location.href = response.url;
                    }

                },
                error: function (error) {

                }
            })

        }
    })





})



function deletetransFAQ(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/translations/deletefaq/" + val,
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
function deletebusinessFAQ(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/business/deletefaq/" + val,
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

function deleteBanner(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/home-sliders/delete/" + val,
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

function deletevisaFAQ(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/visaservice/deletefaq/" + val,
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


function deleteBlog(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/blogs/delete/" + val,
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

function deleteReview(val) {


    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/customer-experience/delete/" + val,
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

function deleteTeam(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/team-members/delete/" + val,
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

function deleteBrand(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/brand/delete/" + val,
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

            url: "/admin/testimonial/delete/" + val,
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

function deleteCorporate(val) {

    if (confirm("Are you sure want to delete this service ?")) {

        $.ajax({

            url: "/admin/corporate-solutions/delete/" + val,
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


function deleteService(val, page) {


    if (page === "translation") {

        if (confirm("Are you sure want to delete this service ?")) {

            $.ajax({

                url: "/admin/translations/" + val,
                type: "DELETE",
                beforeSend: function () {

                },
                success: function (response) {

                    if (response.message) {
                        $('.success-msg').show();
                        $('#messagedel').html(response.message);
                    }
                    if (response.success === true) {
                        window.location.href = "/admin/translations/edit/select-service"
                    }
                },
                error: function (error) {

                }
            })

        }
    } else if (page === "business") {

        if (confirm("Are you sure want to delete this service ?")) {

            $.ajax({

                url: "/admin/business/" + val,
                type: "DELETE",
                beforeSend: function () {

                },
                success: function (response) {

                    if (response.message) {
                        $('.success-msg').show();
                        $('#messagedel').html(response.message);
                    }
                    if (response.success === true) {
                        window.location.href = "/admin/business/edit/select-service"
                    }
                },
                error: function (error) {

                }
            })

        }
    } else if (page === "visa") {

        if (confirm("Are you sure want to delete this service ?")) {

            $.ajax({

                url: "/admin/visaservice/" + val,
                type: "DELETE",
                beforeSend: function () {

                },
                success: function (response) {

                    if (response.message) {
                        $('.success-msg').show();
                        $('#messagedel').html(response.message);
                    }
                    if (response.success === true) {
                        window.location.href = "/admin/visaservice/edit/select-service"
                    }
                },
                error: function (error) {

                }
            })

        }

    }



}
