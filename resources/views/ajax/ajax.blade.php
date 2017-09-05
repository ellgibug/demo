<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Ajax</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Эта страница ничего не значит для проекта</h1>
        <h4>Это просто пример для AJAX GET запроса</h4>
        <form method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="view_selection">View content</label>
                <select class="form-control" id="view_selection" name="option_selected">
                    <option selected disabled>View</option>
                    <option value="1">View 1</option>
                    <option value="2">View 2</option>
                    <option value="3">View 3</option>
                </select>
            </div>
            <div class="form-group" id="place_for_view_content">
            </div>
            <button type="submit" class="btn btn-primary" disabled>Отправить POST запрос</button>
        </form>
    </div>

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $("#view_selection").change(function () {
                var place = $("#place_for_view_content");
                $.ajax({
                    type: "GET",
                    url: '{{route("get-ajax")}}',
                    dataType: "html",
                    data:{
                        'option':$(this).val(),
                    },
                    success: function(response)
                    {
                        place.html(response);
                    }
                });
            });
        });
    </script>

</body>
</html>