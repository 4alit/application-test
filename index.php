<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            $(function () {
                var people = <?php
echo json_encode(array(
    array('id' => 1, 'first_name' => 'John', 'last_name' => 'Smith', 'email' => 'john.smith@hotmail.com'),
    array('id' => 2, 'first_name' => 'Paul', 'last_name' => 'Allen', 'email' => 'paul.allen@microsoft.com'),
    array('id' => 3, 'first_name' => 'James', 'last_name' => 'Johnston', 'email' => 'james.johnston@gmail.com'),
    array('id' => 4, 'first_name' => 'Steve', 'last_name' => 'Buscemi', 'email' => 'steve.buscemi@yahoo.com'),
    array('id' => 5, 'first_name' => 'Doug', 'last_name' => 'Simons', 'email' => 'doug.simons@hotmail.com')
));
?>;
                //set table tag
                var table = $('<table/>');
                //append title and header
                table.append('<caption><h1>Test application</h1></caption><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>E-mail</th><th>Action</th></tr>');
                //append people array into the table
                $.each(people, function (i, value) {
                    var valueToShowOnClick = 'Name: ' + value.first_name + '\n' + 'Email: ' + value.email;
                    table.append('<tr><td>' + value.id + '</td>' + '<td>' + value.first_name + '</td>'
                            + '<td>' + value.last_name + '</td>' + '<td>' + value.email + '</td>' +
                            '<td><button class="showRow" type="button" value="' + valueToShowOnClick
                            + '">Click Me!</button></td></tr>');
                });
                //add table to the page
                $('.content').append(table);

                $('.showRow').click(function () {
                    alert(this.value);
                    //or instead of setting buttons value
                    // var name = $(this).closest('tr').find('td:eq(1)').text();
                    // var email = $(this).closest('tr').find('td:eq(3)').text();
                    // alert('Name: ' + name+'\nEmail: ' + email);
                });
            });
        </script>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>
        <div class="content">
        </div>
    </body>
</html>

