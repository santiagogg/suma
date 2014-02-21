<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.print.css"/>

    <script src='//code.jquery.com/jquery-1.10.2.min.js'></script>
    <script src='//code.jquery.com/ui/1.10.4/jquery-ui.js'></script>

    <script src='//cdnjs.cloudflare.com/ajax/libs/fullcalendar/1.6.4/fullcalendar.min.js'></script>

    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({

                editable: true,

                events: "api",

                loading: function(bool) {
                    if (bool) $('#loading').show();
                    else $('#loading').hide();
                }

            });

        });

    </script>
    <style>

        body {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        }

        #loading {
            position: absolute;
            top: 5px;
            right: 5px;
        }

        #calendar {
            width: 900px;
            margin: 0 auto;
        }

    </style>
</head>
<body>
<div id='loading' style='display:none'>loading...</div>
<div id='calendar'></div>
</body>
</html>