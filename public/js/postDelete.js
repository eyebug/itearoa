$(document).ready(function () {
    $("p").click(function () {
        $(this).hide();
    });

    $('.deletePost').click(
        function (e) {
            e.preventDefault();
            var result = confirm("Do you want to delete the post?");
            if (result) {
                var element = $(this);
                var id = element.attr('postid');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                })
                $.ajax(
                    {
                        url: '/post/delete',
                        data: {id: id},
                        method: 'POST',
                        success: function (result) {
                            if (result.status == 0) {
                                alert("Success!");
                                element.parent().remove();
                            } else {
                                alert(result.detail);
                            }
                        }
                    }
                );
            }
        }
    )
});
